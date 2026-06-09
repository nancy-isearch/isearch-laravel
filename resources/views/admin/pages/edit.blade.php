@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Edit Page</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('pages.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('pages.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
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
                                <input type="text" name="name" class="form-control" required value="{{ old('name', $page->name) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug <span class="text-danger">*</span></label>
                                <input type="text" name="slug" class="form-control" required value="{{ old('slug', $page->slug) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $page->meta_description) }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Schema (JSON)</label>
                                <textarea name="schema" class="form-control" rows="3">{{ old('schema', $page->schema) }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-check mt-2">
                                    <input type="checkbox" name="is_active" class="form-check-input" id="isActive" value="1" {{ old('is_active', $page->is_active) ? 'checked' : '' }}>
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
                            <div class="d-flex gap-2">
                                <select id="templateSelector" class="form-control" style="width: 250px;">
                                    <option value="">Select a template...</option>
                                    @foreach($templates as $template)
                                        <option value="{{ $template->id }}">{{ $template->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" id="addSectionBtn" class="btn btn-secondary">Add Section</button>
                            </div>
                        </div>

                        <div id="sectionsContainer">
                            <!-- Dynamic sections will be appended here -->
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 mb-30">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Update Page</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script>
    const templates = @json($templates->keyBy('id'));
    const existingSections = @json($page->pageSections);
    
    const sectionsContainer = document.getElementById('sectionsContainer');
    const templateSelector = document.getElementById('templateSelector');
    const addSectionBtn = document.getElementById('addSectionBtn');
    let sectionCount = 0;

    addSectionBtn.addEventListener('click', function() {
        const templateId = templateSelector.value;
        if (!templateId) {
            alert('Please select a template first.');
            return;
        }

        const template = templates[templateId];
        addSection(template);
    });

    function escapeHtml(unsafe) {
        if(unsafe == null) return '';
        return (unsafe + '')
             .replace(/&/g, "&amp;")
             .replace(/</g, "&lt;")
             .replace(/>/g, "&gt;")
             .replace(/"/g, "&quot;")
             .replace(/'/g, "&#039;");
    }

    function addSection(template, existingData = null) {
        const index = sectionCount++;
        const data = existingData ? existingData : {};
        
        let html = `
            <div class="card mb-3 border bg-light section-block" data-index="${index}">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">${template.name} Section</h5>
                    <button type="button" class="btn btn-sm btn-danger remove-section">Remove</button>
                    <input type="hidden" name="sections[${index}][template_id]" value="${template.id}">
                </div>
                <div class="card-body row">
        `;

        if (template.section_fields && template.section_fields.length > 0) {
            template.section_fields.forEach(field => {
                const requiredAttr = field.is_required ? 'required' : '';
                const requiredStar = field.is_required ? '<span class="text-danger">*</span>' : '';
                const fieldName = `sections[${index}][data][${field.field_name}]`;
                
                // Get existing value if editing
                let fieldValue = data[field.field_name] || '';
                
                html += `<div class="col-md-12 mb-3"><label>${field.field_label} ${requiredStar}</label>`;
                
                if (field.field_type === 'repeater') {
                    const subFieldsJson = JSON.stringify(field.sub_fields || []);
                    html += `<div class="border p-3 mb-2 bg-white repeater-container rounded" data-section-index="${index}" data-field-name="${field.field_name}" data-subfields='${subFieldsJson.replace(/'/g, "&#39;")}'>
                                <div class="repeater-items"></div>
                                <button type="button" class="btn btn-sm btn-outline-primary add-repeater-item mt-2">+ Add Item</button>
                             </div>`;
                    
                    let itemsArray = [];
                    if (fieldValue) {
                        if (Array.isArray(fieldValue)) {
                            itemsArray = fieldValue;
                        } else if (typeof fieldValue === 'object') {
                            itemsArray = Object.values(fieldValue);
                        }
                    }

                    if (itemsArray.length > 0) {
                        if (!window.repeaterQueue) window.repeaterQueue = [];
                        window.repeaterQueue.push({
                            sectionIndex: index,
                            fieldName: field.field_name,
                            items: itemsArray
                        });
                    }
                } else if (field.field_type === 'textarea' || field.field_type === 'editor') {
                    html += `<textarea name="${fieldName}" class="form-control" rows="3" ${requiredAttr}>${escapeHtml(fieldValue)}</textarea>`;
                } else if (field.field_type === 'number') {
                    html += `<input type="number" name="${fieldName}" class="form-control" value="${escapeHtml(fieldValue)}" ${requiredAttr}>`;
                } else if (field.field_type === 'file') {
                    html += `<input type="text" name="${fieldName}" class="form-control" value="${escapeHtml(fieldValue)}" placeholder="Image URL or path..." ${requiredAttr}>`;
                } else {
                    html += `<input type="text" name="${fieldName}" class="form-control" value="${escapeHtml(fieldValue)}" ${requiredAttr}>`;
                }
                
                html += `</div>`;
            });
        } else {
            html += `<div class="col-12"><p class="text-muted mb-0">No fields defined for this template.</p></div>`;
        }

        html += `
                </div>
            </div>
        `;

        sectionsContainer.insertAdjacentHTML('beforeend', html);

        if (window.repeaterQueue && window.repeaterQueue.length > 0) {
            window.repeaterQueue.forEach(job => {
                const container = document.querySelector(`.repeater-container[data-section-index="${job.sectionIndex}"][data-field-name="${job.fieldName}"]`);
                if (container) {
                    job.items.forEach(itemData => {
                        addRepeaterItem(container, itemData);
                    });
                }
            });
            window.repeaterQueue = []; // clear
        }
    }

    // Event delegation
    sectionsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-repeater-item')) {
            const container = e.target.closest('.repeater-container');
            addRepeaterItem(container);
        } else if (e.target.classList.contains('remove-repeater-item')) {
            if (confirm('Remove this item?')) {
                e.target.closest('.repeater-item').remove();
            }
        } else if (e.target.classList.contains('remove-section')) {
            if (confirm('Remove this section?')) {
                e.target.closest('.section-block').remove();
            }
        }
    });

    function addRepeaterItem(container, existingData = null) {
        const sectionIndex = container.getAttribute('data-section-index');
        const fieldName = container.getAttribute('data-field-name');
        const subFields = JSON.parse(container.getAttribute('data-subfields'));
        const itemsContainer = container.querySelector('.repeater-items');
        
        const itemIndex = Date.now() + Math.floor(Math.random() * 1000); // Unique index
        
        let html = `<div class="repeater-item border p-2 mb-2 bg-light position-relative rounded">
                        <button type="button" class="btn btn-sm btn-danger remove-repeater-item position-absolute" style="top: 5px; right: 5px; z-index: 10;">X</button>
                        <div class="row pe-4">`; 
        
        if (subFields && subFields.length > 0) {
            subFields.forEach(sub => {
                const baseName = `sections[${sectionIndex}][data][${fieldName}][${itemIndex}][${sub.name}]`;
                const val = existingData ? (existingData[sub.name] || '') : '';
                html += `<div class="col-md-12 mb-2"><label class="form-label mb-1" style="font-size: 0.85rem;">${sub.label || sub.name}</label>`;
                
                if (sub.type === 'textarea') {
                    html += `<textarea name="${baseName}" class="form-control form-control-sm" rows="2">${escapeHtml(val)}</textarea>`;
                } else {
                    html += `<input type="${sub.type || 'text'}" name="${baseName}" class="form-control form-control-sm" value="${escapeHtml(val)}">`;
                }
                html += `</div>`;
            });
        } else {
            html += `<div class="col-12"><small class="text-danger">No sub-fields defined for this repeater.</small></div>`;
        }

        html += `</div></div>`;
        itemsContainer.insertAdjacentHTML('beforeend', html);
    }

    // Load existing sections on page load
    document.addEventListener('DOMContentLoaded', function() {
        if (existingSections && existingSections.length > 0) {
            existingSections.forEach(section => {
                const template = templates[section.section_template_id];
                if (template) {
                    addSection(template, section.section_data);
                }
            });
        }
    });
</script>
@endpush
