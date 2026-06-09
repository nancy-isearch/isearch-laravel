@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Section Fields</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            + Add New
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="table-wrapper table-responsive">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <table class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th><h6>Template</h6></th>
                                    <th><h6>Label</h6></th>
                                    <th><h6>Name</h6></th>
                                    <th><h6>Type</h6></th>
                                    <th><h6>Required</h6></th>
                                    <th><h6>Sort</h6></th>
                                    <th><h6>Actions</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($fields as $field)
                                    <tr>
                                        <td>{{ $field->sectionTemplate->name ?? 'N/A' }}</td>
                                        <td>{{ $field->field_label }}</td>
                                        <td>{{ $field->field_name }}</td>
                                        <td>{{ $field->field_type }}</td>
                                        <td>
                                            <span class="badge {{ $field->is_required ? 'bg-success' : 'bg-secondary' }}">
                                                {{ $field->is_required ? 'Yes' : 'No' }}
                                            </span>
                                        </td>
                                        <td>{{ $field->sort_order }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-info text-white edit-btn" 
                                                    data-id="{{ $field->id }}" 
                                                    data-template="{{ $field->section_template_id }}" 
                                                    data-label="{{ $field->field_label }}" 
                                                    data-name="{{ $field->field_name }}" 
                                                    data-type="{{ $field->field_type }}" 
                                                    data-required="{{ $field->is_required }}" 
                                                    data-sort="{{ $field->sort_order }}" 
                                                    data-bs-toggle="modal" data-bs-target="#editModal">
                                                Edit
                                            </button>
                                            <form action="{{ route('section-fields.destroy', $field->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No section fields found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        
                        <div class="mt-3">
                            {{ $fields->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Section Field</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('section-fields.store') }}" method="POST">
          @csrf
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label>Section Template <span class="text-danger">*</span></label>
                      <select name="section_template_id" class="form-control" required>
                          <option value="">Select Template...</option>
                          @foreach($templates as $template)
                              <option value="{{ $template->id }}">{{ $template->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  
                  <div class="col-md-6 mb-3">
                      <label>Field Label <span class="text-danger">*</span></label>
                      <input type="text" name="field_label" class="form-control" required placeholder="e.g. Title">
                  </div>

                  <div class="col-md-6 mb-3">
                      <label>Field Name <span class="text-danger">*</span></label>
                      <input type="text" name="field_name" class="form-control" required placeholder="e.g. title">
                  </div>

                  <div class="col-md-6 mb-3">
                      <label>Field Type <span class="text-danger">*</span></label>
                      <select name="field_type" class="form-control" required>
                          <option value="text">Text</option>
                          <option value="textarea">Textarea</option>
                          <option value="number">Number</option>
                          <option value="file">File (Image)</option>
                          <option value="editor">WYSIWYG Editor</option>
                      </select>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label>Sort Order</label>
                      <input type="number" name="sort_order" class="form-control" value="0">
                  </div>

                  <div class="col-md-6 mb-3 d-flex align-items-center">
                      <div class="form-check mt-4">
                          <input type="checkbox" name="is_required" class="form-check-input" id="add_isRequired" value="1">
                          <label class="form-check-label" for="add_isRequired">Is Required?</label>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Field</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Section Field</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editForm" method="POST">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label>Section Template <span class="text-danger">*</span></label>
                      <select name="section_template_id" id="edit_template" class="form-control" required>
                          <option value="">Select Template...</option>
                          @foreach($templates as $template)
                              <option value="{{ $template->id }}">{{ $template->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  
                  <div class="col-md-6 mb-3">
                      <label>Field Label <span class="text-danger">*</span></label>
                      <input type="text" name="field_label" id="edit_label" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label>Field Name <span class="text-danger">*</span></label>
                      <input type="text" name="field_name" id="edit_name" class="form-control" required>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label>Field Type <span class="text-danger">*</span></label>
                      <select name="field_type" id="edit_type" class="form-control" required>
                          <option value="text">Text</option>
                          <option value="textarea">Textarea</option>
                          <option value="number">Number</option>
                          <option value="file">File (Image)</option>
                          <option value="editor">WYSIWYG Editor</option>
                      </select>
                  </div>

                  <div class="col-md-6 mb-3">
                      <label>Sort Order</label>
                      <input type="number" name="sort_order" id="edit_sort" class="form-control">
                  </div>

                  <div class="col-md-6 mb-3 d-flex align-items-center">
                      <div class="form-check mt-4">
                          <input type="checkbox" name="is_required" class="form-check-input" id="edit_required" value="1">
                          <label class="form-check-label" for="edit_required">Is Required?</label>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Field</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');
        const editForm = document.getElementById('editForm');
        
        const editTemplate = document.getElementById('edit_template');
        const editLabel = document.getElementById('edit_label');
        const editName = document.getElementById('edit_name');
        const editType = document.getElementById('edit_type');
        const editSort = document.getElementById('edit_sort');
        const editRequired = document.getElementById('edit_required');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                
                editTemplate.value = this.getAttribute('data-template');
                editLabel.value = this.getAttribute('data-label');
                editName.value = this.getAttribute('data-name');
                editType.value = this.getAttribute('data-type');
                editSort.value = this.getAttribute('data-sort');
                editRequired.checked = this.getAttribute('data-required') == '1';
                
                editForm.action = `/admin/section-fields/${id}`;
            });
        });
    });
</script>
@endpush
