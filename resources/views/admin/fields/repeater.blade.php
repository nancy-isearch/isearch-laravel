@php

    $items = $value ?? [];

    $fieldName = $field['name'];

@endphp

<div class="card mb-4">

    <div class="card-header">

        <h5 class="mb-0">

            {{ $field['label'] }}

        </h5>

    </div>

    <div class="card-body">

        <div class="repeater-wrapper" data-field="{{ $fieldName }}">

            @foreach ($items as $index => $item)
                <div class="repeater-item border rounded p-3 mb-3">

                    @foreach ($field['fields'] as $child)
                        @php

                            $childName = $fieldName . '[' . $index . '][' . $child['name'] . ']';

                        @endphp

                        @include(
                            'admin.fields.' . $child['type'],
                        
                            [
                                'field' => array_merge($child, [
                                    'name' => $childName,
                                ]),
                        
                                'value' => $item[$child['name']] ?? null,
                            ]
                        )
                    @endforeach

                    <button type="button" class="btn btn-danger remove-repeater">

                        Remove

                    </button>

                </div>
            @endforeach

        </div>

        <button type="button" class="btn btn-primary add-repeater" data-field="{{ $fieldName }}">

            Add Item

        </button>

    </div>

</div>

<script type="text/template"
id="template-{{ $fieldName }}">

<div
class="repeater-item border rounded p-3 mb-3">

@foreach($field['fields'] as $child)

    <div class="mb-3">

        <label class="form-label">

        {{ $child['label'] }}

        </label>

        @if($child['type']=='text')

            <input type="text" name="__NAME__" class="form-control" />

        @endif

        @if($child['type']=='textarea')

            <textarea name="__NAME__" rows="4" class="form-control"></textarea>

        @endif

    </div>

@endforeach

<button
type="button"

class="btn btn-danger remove-repeater">

Remove

</button>

</div>

</script>
