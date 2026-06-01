(function () {
    "use strict";

    /* =========================
       1. Set Timestamp
    ========================== */

    const formTimeField = document.getElementById("form_time");

    if (formTimeField) {
        formTimeField.value = Math.floor(Date.now() / 1000);
    }

    /* =========================
       2. Config
    ========================== */

    const spamKeywords = [
        "porn",
        "casino",
        "sex",
        "anal",
        "adult",
        "xxx",
        "nude",
        "viagra",
        "cialis",
        "gambling",
        "bet",
        "lottery",
        "bitcoin",
        "crypto",
        "forex",
        "make money fast",
        "work from home",
        "earn cash",
        "earn money",
        "click here",
        "free offer",
        "winner",
        "prize",
        "loan",
        "payday",
        "backlinks",
        "buy followers",
        "cheap meds",
        "weight loss",
        "diet pills",
        "pharmacy",
        "prescription",
        "driver-sales",
        "driver sales",
    ];

    const blockedDomains = [
        "mailinator.com",
        "guerrillamail.com",
        "tempmail.com",
        "throwam.com",
        "yopmail.com",
        "sharklasers.com",
        "spam4.me",
        "trashmail.com",
        "tempr.email",
        "dispostable.com",
        "fakeinbox.com",
        "maildrop.cc",
    ];

    /* =========================
       3. Helpers
    ========================== */

    function showError(fieldId, errId, message) {
        const field = document.getElementById(fieldId);
        const err = document.getElementById(errId);

        if (field) {
            field.classList.add("is-invalid");
            field.classList.remove("is-valid");
        }

        if (err) {
            err.textContent = message;
        }
    }

    function clearError(fieldId, errId) {
        const field = document.getElementById(fieldId);
        const err = document.getElementById(errId);

        if (field) {
            field.classList.remove("is-invalid");
            field.classList.add("is-valid");
        }

        if (err) {
            err.textContent = "";
        }
    }

    function validateEmail(email) {
        return /^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/.test(email);
    }

    function validateUrl(url) {
        return /^(https?:\/\/)?([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,}(\/.*)?$/.test(
            url,
        );
    }

    /* =========================
       4. Elements
    ========================== */

    const form = document.getElementById("enquiryForm");

    const nameEl = document.getElementById("name");
    const mobileEl = document.getElementById("mobile");
    const emailEl = document.getElementById("email");
    const urlEl = document.getElementById("url");
    const serviceEl = document.getElementById("service");
    const reqEl = document.getElementById("requirement");
    const submitBtn = document.getElementById("submitBtn");

    /* =========================
       5. Realtime Validation
    ========================== */

    if (nameEl) {
        nameEl.addEventListener("blur", function () {
            const value = this.value.trim();

            if (!value || value.length < 2) {
                showError(
                    "name",
                    "err-name",
                    "Name must be minimum 2 characters.",
                );
            } else {
                clearError("name", "err-name");
            }
        });
    }

    if (mobileEl) {
        mobileEl.addEventListener("blur", function () {
            const digits = this.value.replace(/[\s\-\(\)\+]/g, "");

            if (!digits || !/^\d{7,15}$/.test(digits)) {
                showError("mobile", "err-mobile", "Enter valid phone number.");
            } else {
                clearError("mobile", "err-mobile");
            }
        });
    }

    if (emailEl) {
        emailEl.addEventListener("blur", function () {
            const value = this.value.trim().toLowerCase();

            if (!validateEmail(value)) {
                showError("email", "err-email", "Enter valid email.");

                return;
            }

            const domain = value.split("@")[1];

            if (blockedDomains.includes(domain)) {
                showError(
                    "email",
                    "err-email",
                    "Disposable emails not allowed.",
                );

                return;
            }

            clearError("email", "err-email");
        });
    }

    if (urlEl) {
        urlEl.addEventListener("blur", function () {
            const value = this.value.trim();

            if (!value) {
                clearError("url", "err-url");

                return;
            }

            if (!validateUrl(value)) {
                showError("url", "err-url", "Enter valid website URL.");
            } else {
                clearError("url", "err-url");
            }
        });
    }

    if (reqEl) {
        reqEl.addEventListener("blur", function () {
            const value = this.value.trim();

            if (value.length < 10) {
                showError(
                    "requirement",
                    "err-requirement",
                    "Minimum 10 characters required.",
                );
            } else {
                clearError("requirement", "err-requirement");
            }
        });
    }

    /* =========================
       6. Form Submit
    ========================== */

    if (form) {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            let valid = true;

            document.querySelectorAll(".field-error").forEach((el) => {
                el.textContent = "";
            });

            /* Name */

            const name = nameEl.value.trim();

            if (!name || name.length < 2) {
                showError("name", "err-name", "Name required.");

                valid = false;
            }

            /* Mobile */

            const mobile = mobileEl.value.trim();

            if (!mobile) {
                showError("mobile", "err-mobile", "Mobile required.");

                valid = false;
            }

            /* Email */

            const email = emailEl.value.trim().toLowerCase();

            if (!validateEmail(email)) {
                showError("email", "err-email", "Valid email required.");

                valid = false;
            }

            /* Service */

            if (!serviceEl.value) {
                showError("service", "err-service", "Select a service.");

                valid = false;
            }

            /* URL */

            const website = urlEl.value.trim();

            if (website && !validateUrl(website)) {
                showError("url", "err-url", "Invalid website URL.");

                valid = false;
            }

            /* Requirement */

            const requirement = reqEl.value.trim();

            if (requirement.length < 10) {
                showError(
                    "requirement",
                    "err-requirement",
                    "Requirement too short.",
                );

                valid = false;
            }

            /* Spam */

            const combinedText = (
                name +
                email +
                website +
                requirement
            ).toLowerCase();

            for (let keyword of spamKeywords) {
                if (combinedText.includes(keyword)) {
                    alert("Spam content detected.");

                    return;
                }
            }

            /* Captcha */

            // let captcha = "";

            // if (typeof grecaptcha !== "undefined") {
            //     captcha = grecaptcha.getResponse();
            // }

            // if (!captcha) {
            //     document.getElementById("err-captcha").textContent =
            //         "Captcha required.";

            //     valid = false;
            // }

            // if (!valid) {
            //     return;
            // }

            /* Loading */

            submitBtn.disabled = true;

            submitBtn.innerText = "Submitting...";

            try {
                const formData = new FormData(form);

                /* intl-tel-input */

                if (typeof phoneInput !== "undefined") {
                    formData.set(
                        "dial_code",
                        "+" + phoneInput.getSelectedCountryData().dialCode,
                    );
                }

                const response = await fetch("/enquiry", {
                    method: "POST",
                    headers: {
                        Accept: "application/json",
                        'X-CSRF-TOKEN':
                        document.querySelector(
                           'meta[name="csrf-token"]'
                        ).content
                    },
                    body: formData,
                });

                const data = await response.json();

                if (!response.ok) {
                    throw data;
                }

                alert(data.message || "Enquiry submitted successfully.");

                form.reset();

                if (typeof grecaptcha !== "undefined") {
                    grecaptcha.reset();
                }
            } catch (error) {
                console.error(error);

                if (error.errors) {
                    Object.keys(error.errors).forEach(function (key) {
                        const errEl = document.getElementById(
                            "err-" + key.replace("_", "-"),
                        );

                        if (errEl) {
                            errEl.textContent = error.errors[key][0];
                        }
                    });
                } else {
                    alert(error.message || "Something went wrong.");
                }
            } finally {
                submitBtn.disabled = false;

                submitBtn.innerText = "Send Request";
            }
        });
    }
})();
