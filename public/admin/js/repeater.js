document.addEventListener(
    "DOMContentLoaded",

    function () {
        document
            .querySelectorAll(".add-repeater")

            .forEach(function (button) {
                button.addEventListener(
                    "click",

                    function () {
                        let field = this.dataset.field;

                        let wrapper = this.previousElementSibling;

                        let index =
                            wrapper.querySelectorAll(".repeater-item").length;

                        let template = document.getElementById(
                            "template-" + field,
                        ).innerHTML;

                        template = template.replaceAll(
                            "__NAME__",

                            function () {
                                return "";
                            },
                        );

                        let div = document.createElement("div");

                        div.innerHTML = template;

                        div.querySelectorAll("input,textarea")

                            .forEach(function (el) {
                                let label = el
                                    .closest(".mb-3")
                                    .querySelector("label").innerText;

                                let key = label
                                    .toLowerCase()
                                    .replaceAll(" ", "_");

                                el.name =
                                    field + "[" + index + "][" + key + "]";
                            });

                        wrapper.appendChild(div.firstElementChild);
                    },
                );
            });

        document.addEventListener(
            "click",

            function (e) {
                if (e.target.classList.contains("remove-repeater")) {
                    e.target.closest(".repeater-item").remove();
                }
            },
        );
    },
);
