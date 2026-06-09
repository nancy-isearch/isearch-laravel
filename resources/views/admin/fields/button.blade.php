<div class="card p-3 mb-4">

    <h6>

        {{ $field['label'] }}

    </h6>

    <div class="mb-3">

        <label>

            Button Text

        </label>

        <input type="text" name="{{ $field['name'] }}[text]" value="{{ $value['text'] ?? '' }}" class="form-control">

    </div>

    <div class="mb-3">

        <label>

            URL

        </label>

        <input type="text" name="{{ $field['name'] }}[url]" value="{{ $value['url'] ?? '' }}" class="form-control">

    </div>

</div>
