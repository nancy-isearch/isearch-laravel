@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Section Templates</h2>
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
                                    <th><h6>#</h6></th>
                                    <th><h6>Name</h6></th>
                                    <th><h6>Slug</h6></th>
                                    <th><h6>Actions</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($templates as $index => $template)
                                    <tr>
                                        <td>{{ $templates->firstItem() + $index }}</td>
                                        <td><p>{{ $template->name }}</p></td>
                                        <td>{{ $template->slug }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-info text-white edit-btn" 
                                                    data-id="{{ $template->id }}" 
                                                    data-name="{{ $template->name }}" 
                                                    data-slug="{{ $template->slug }}" 
                                                    data-bs-toggle="modal" data-bs-target="#editModal">
                                                Edit
                                            </button>
                                            <form action="{{ route('section-templates.destroy', $template->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No section templates found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        
                        <div class="mt-3">
                            {{ $templates->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Section Template</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('section-templates.store') }}" method="POST">
          @csrf
          <div class="modal-body">
              <div class="mb-3">
                  <label>Name <span class="text-danger">*</span></label>
                  <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label>Slug (Optional)</label>
                  <input type="text" name="slug" class="form-control">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Template</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Section Template</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editForm" method="POST">
          @csrf
          @method('PUT')
          <div class="modal-body">
              <div class="mb-3">
                  <label>Name <span class="text-danger">*</span></label>
                  <input type="text" name="name" id="edit_name" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label>Slug <span class="text-danger">*</span></label>
                  <input type="text" name="slug" id="edit_slug" class="form-control" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Template</button>
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
        const editName = document.getElementById('edit_name');
        const editSlug = document.getElementById('edit_slug');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const slug = this.getAttribute('data-slug');

                editName.value = name;
                editSlug.value = slug;
                editForm.action = `/admin/section-templates/${id}`;
            });
        });
    });
</script>
@endpush
