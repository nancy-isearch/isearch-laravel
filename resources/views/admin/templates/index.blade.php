@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Templates</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('templates.create') }}" class="btn btn-primary">+ Add New Template</a>
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
                                    <th><h6>Image</h6></th>
                                    <th><h6>Name</h6></th>
                                    <th><h6>Status</h6></th>
                                    <th><h6>Actions</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($templates as $index => $template)
                                    <tr>
                                        <td>{{ $templates->firstItem() + $index }}</td>
                                        <td>
                                            @if($template->image)
                                                <img src="{{ Storage::url($template->image) }}" alt="{{ $template->name }}" style="width: 80px; height: auto;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td><p>{{ $template->name }}</p></td>
                                        <td>
                                            <span class="badge {{ $template->is_active ? 'bg-success' : 'bg-danger' }}">
                                                {{ $template->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('templates.edit', $template->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                                            <form action="{{ route('templates.destroy', $template->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this template?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No templates found.</td>
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
@endsection
