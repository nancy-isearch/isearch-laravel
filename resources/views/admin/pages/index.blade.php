@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Pages</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('pages.create') }}" class="btn btn-primary">+ Add New Page</a>
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

                        <table class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th><h6>#</h6></th>
                                    <th><h6>Name</h6></th>
                                    <th><h6>Slug</h6></th>
                                    <th><h6>Status</h6></th>
                                    <th><h6>Actions</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $index => $page)
                                    <tr>
                                        <td>{{ $pages->firstItem() + $index }}</td>
                                        <td><p>{{ $page->name }}</p></td>
                                        <td>{{ $page->slug }}</td>
                                        <td>
                                            <span class="badge {{ $page->is_active ? 'bg-success' : 'bg-danger' }}">
                                                {{ $page->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-secondary" onclick="copyPage({{ $page->id }}, '{{ addslashes($page->name) }}')">Copy</button>
                                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No pages found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        
                        <div class="mt-3">
                            {{ $pages->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy Page Bootstrap Modal -->
    <div class="modal fade" id="copyPageModal" tabindex="-1" aria-labelledby="copyPageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="copyPageForm" method="POST" action="">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="copyPageModalLabel">Copy Page: <span id="originalPageName" class="text-primary"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="copyInputName" class="form-label">New Page Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="copyInputName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="copyInputSlug" class="form-label">New Page Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="copyInputSlug" name="slug" required>
                            <small class="form-text text-muted">This will be the URL of the new page. Must be unique.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Copy Page</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function copyPage(pageId, pageName) {
        // Set the form action URL
        let form = document.getElementById('copyPageForm');
        form.action = '{{ url("admin/pages") }}/' + pageId + '/copy';
        
        // Update Modal Title
        document.getElementById('originalPageName').textContent = pageName;
        
        // Pre-fill inputs
        let nameInput = document.getElementById('copyInputName');
        let slugInput = document.getElementById('copyInputSlug');
        
        let newName = pageName + ' Copy';
        nameInput.value = newName;
        slugInput.value = newName.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
        
        // Open the Bootstrap Modal
        var myModal = new bootstrap.Modal(document.getElementById('copyPageModal'));
        myModal.show();
    }

    // Auto-update slug when typing the name in the modal
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('copyInputName').addEventListener('input', function() {
            document.getElementById('copyInputSlug').value = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
        });
    });
    </script>
</section>
@endsection
