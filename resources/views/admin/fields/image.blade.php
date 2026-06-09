<div class="mb-4">

    <label class="form-label">

        {{ $field['label'] }}

    </label>

    <input type="file" name="{{ $field['name'] }}" class="form-control">

    @if (!empty($value))
        <div class="mt-3">

            <img src="{{ asset('storage/' . $value) }}" width="180" class="rounded border">

        </div>
    @endif

</div>
