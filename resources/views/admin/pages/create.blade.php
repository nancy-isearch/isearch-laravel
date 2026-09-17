@extends('admin.layouts.app')

@push('styles')
<style>
    /* Select2 multi-select box height fix */
    .select2,
    .select2-container,
    .select2-container--default {
        width: 100% !important;
        max-width: 100% !important;
        display: block !important;
    }
    .select2-container--default .select2-selection--multiple {
        min-height: 120px !important;
        padding: 6px 8px !important;
        border: 1px solid #ced4da !important;
        border-radius: 6px !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
        padding: 0 !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #074fae;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 3px 10px;
        font-size: 13px;
        margin: 0 !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff;
        margin-right: 5px;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #ffcccc;
        background: transparent;
    }
</style>
@endpush

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Create Page</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('pages.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Page Details -->
                <div class="col-lg-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-style mb-30">
                        <h4 class="mb-25">Basic Information</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Page Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug (Optional)</label>
                                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description') }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Schema (JSON)</label>
                                <textarea name="schema" class="form-control" rows="3">{{ old('schema') }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Page Sections</label>
                                <div style="width: 100%; display: block;">
                                    <select id="customSectionSelector" class="form-control select2 w-100" multiple="multiple" style="width: 100% !important;">
                                        @foreach($allSections as $section)
                                            @if(!in_array($section->name, ['Breadcrumb', 'CTA', 'Footer']))
                                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-muted mt-1 d-block">Select sections to add to this page (in order).</small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-check mt-2">
                                    <input type="checkbox" name="is_active" class="form-check-input" id="isActive" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isActive">Is Active?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page Sections Builder -->
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="d-flex justify-content-between align-items-center mb-25">
                            <h4 class="mb-0">Page Sections</h4>
                        </div>
                        <div id="sectionsContainer">
                            <!-- Dynamic sections will be appended here based on Page Template -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-30">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Save Page</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script>
    const allSections = @json($allSections->keyBy('id'));
    const sectionsContainer = document.getElementById('sectionsContainer');
    const customSectionSelector = document.getElementById('customSectionSelector');
    let sectionCount = 0;

    $(document).ready(function() {
        $('.select2').select2({
            width: '100%',
            placeholder: 'Select sections...'
        });

        // Jab sections select/deselect ho
        $(customSectionSelector).on('change', function() {
            sectionsContainer.innerHTML = '';
            sectionCount = 0;

            const selectedIds = $(this).val() || [];
            selectedIds.forEach(id => {
                const section = allSections[id];
                if (section) addSection(section);
            });
        });
        
        // Make the section blocks sortable by dragging the handle
        $('#sectionsContainer').sortable({
            handle: '.drag-handle',
            axis: 'y',
            update: function() {
                // 1. Re-index all inputs so Laravel gets them in the right order on submit
                $('#sectionsContainer .section-block').each(function(newIndex) {
                    $(this).attr('data-index', newIndex);
                    $(this).find('[name^="sections["]').each(function() {
                        const oldName = $(this).attr('name');
                        if (oldName) {
                            const newName = oldName.replace(/sections\[\d+\]/, 'sections[' + newIndex + ']');
                            $(this).attr('name', newName);
                        }
                    });
                    
                    $(this).find('.repeater-container').attr('data-section-index', newIndex);
                    
                    const headingId = 'heading-' + newIndex;
                    const collapseId = 'collapse-' + newIndex;
                    $(this).find('.card-header').attr('id', headingId);
                    const $btn = $(this).find('button[data-bs-toggle="collapse"]');
                    $btn.attr('data-bs-target', '#' + collapseId);
                    $btn.attr('aria-controls', collapseId);
                    $(this).find('.collapse').attr('id', collapseId).attr('aria-labelledby', headingId);
                });

                // 2. Sync the Select2 <option> tags order
                const $select = $(customSectionSelector);
                $('#sectionsContainer .section-block').each(function() {
                    const title = $(this).find('button[data-bs-toggle="collapse"]').text().trim();
                    const option = $select.find("option").filter(function() {
                        return $(this).text() === title;
                    });
                    $select.append(option);
                });
                
                // 3. Sync the visual blue tags in Select2
                const $selection = $select.parent().find("ul.select2-selection__rendered");
                $('#sectionsContainer .section-block').each(function() {
                    const title = $(this).find('button[data-bs-toggle="collapse"]').text().trim();
                    const li = $selection.find("li.select2-selection__choice").filter(function() {
                        return $(this).attr("title") === title;
                    });
                    $selection.append(li);
                });
            }
        });
    });

    function addSection(template) {
        const index = sectionCount++;

        let html = `
            <div class="card mb-3 border bg-light section-block" data-index="${index}">
                <div class="card-header d-flex justify-content-between align-items-center p-0" id="heading-${index}">
                    <span class="drag-handle px-3" style="cursor: grab; color: #666; font-size: 20px;" title="Drag to reorder">
                        &#9776;
                    </span>
                    <button class="btn btn-link text-dark fw-bold text-decoration-none w-100 collapsed text-start p-3"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-${index}"
                            aria-expanded="false" aria-controls="collapse-${index}">
                        ${template.name}
                    </button>
                    <input type="hidden" name="sections[${index}][template_id]" value="${template.id}">
                </div>
                <div id="collapse-${index}" class="collapse" aria-labelledby="heading-${index}">
                    <div class="card-body row">
        `;

        if (template.section_fields && template.section_fields.length > 0) {
            template.section_fields.forEach(field => {
                const requiredAttr = field.is_required ? 'required' : '';
                const requiredStar = field.is_required ? '<span class="text-danger">*</span>' : '';
                const fieldName = `sections[${index}][data][${field.field_name}]`;

                html += `<div class="col-md-12 mb-3"><label>${field.field_label} ${requiredStar}</label>`;

                if (field.field_type === 'repeater') {
                    const subFieldsJson = JSON.stringify(field.sub_fields || []);
                    html += `<div class="border p-3 mb-2 bg-white repeater-container rounded"
                                  data-section-index="${index}"
                                  data-field-name="${field.field_name}"
                                  data-subfields='${subFieldsJson.replace(/'/g, "&#39;")}'>
                                <div class="repeater-items"></div>
                                <button type="button" class="btn btn-sm btn-outline-primary add-repeater-item mt-2">+ Add Item</button>
                             </div>`;
                } else if (field.field_type === 'textarea' || field.field_type === 'editor') {
                    html += `<textarea name="${fieldName}" class="form-control" rows="3" ${requiredAttr}></textarea>`;
                } else if (field.field_type === 'number') {
                    html += `<input type="number" name="${fieldName}" class="form-control" ${requiredAttr}>`;
                } else if (field.field_type === 'file') {
                    html += `<input type="file" name="${fieldName}" class="form-control" ${requiredAttr}>`;
                } else {
                    html += `<input type="text" name="${fieldName}" class="form-control" ${requiredAttr}>`;
                }

                html += `</div>`;
            });
        } else {
            html += `<div class="col-12"><p class="text-muted mb-0">No fields defined for this section.</p></div>`;
        }

        html += `</div></div></div>`;
        sectionsContainer.insertAdjacentHTML('beforeend', html);
    }

    // Event delegation for repeater
    sectionsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-repeater-item')) {
            addRepeaterItem(e.target.closest('.repeater-container'));
        } else if (e.target.classList.contains('remove-repeater-item')) {
            if (confirm('Remove this item?')) e.target.closest('.repeater-item').remove();
        }
    });

    function addRepeaterItem(container) {
        const sectionIndex = container.getAttribute('data-section-index');
        const fieldName    = container.getAttribute('data-field-name');
        const subFields    = JSON.parse(container.getAttribute('data-subfields'));
        const itemsContainer = container.querySelector('.repeater-items');
        const itemIndex    = Date.now() + Math.floor(Math.random() * 1000);

        let html = `<div class="repeater-item border p-2 mb-2 bg-light position-relative rounded">
                        <button type="button" class="btn btn-sm btn-danger remove-repeater-item position-absolute" style="top:5px;right:5px;z-index:10;">X</button>
                        <div class="row pe-4">`;

        if (subFields && subFields.length > 0) {
            subFields.forEach(sub => {
                const subName  = sub.field_name || sub.name;
                const subLabel = sub.field_label || sub.label || subName;
                const subType  = sub.field_type  || sub.type  || 'text';
                const baseName = `sections[${sectionIndex}][data][${fieldName}][${itemIndex}][${subName}]`;

                html += `<div class="col-md-12 mb-2"><label class="form-label mb-1" style="font-size:0.85rem;">${subLabel}</label>`;
                if (subType === 'textarea') {
                    html += `<textarea name="${baseName}" class="form-control form-control-sm" rows="2"></textarea>`;
                } else if (subType === 'file') {
                    html += `<input type="file" name="${baseName}" class="form-control form-control-sm">`;
                } else {
                    html += `<input type="${subType}" name="${baseName}" class="form-control form-control-sm">`;
                }
                html += `</div>`;
            });
        } else {
            html += `<div class="col-12"><small class="text-danger">No sub-fields defined.</small></div>`;
        }

        html += `</div></div>`;
        itemsContainer.insertAdjacentHTML('beforeend', html);
    }
</script>
@endpush
