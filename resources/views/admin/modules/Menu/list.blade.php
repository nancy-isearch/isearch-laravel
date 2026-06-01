@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="container-fluid">

            <!-- Title -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">

                    <div class="col-md-6">
                        <div class="title">
                            <h2>Menus</h2>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <a href="{{ route('menus.create') }}" class="btn btn-primary">
                                + Add New Menu
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Table -->
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
                                        <th><h6>Location</h6></th>
                                        <th><h6>Total Items</h6></th>
                                        <th><h6>Actions</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($menus as $index => $menu)
                                        <tr>
                                            <td>{{ $menus->firstItem() + $index }}</td>
                                            <td><p>{{ $menu->name }}</p></td>
                                            <td>{{ $menu->location ?? 'None' }}</td>
                                            <td>{{ $menu->items_count }}</td>
                                            <td>
                                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this menu?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No menus found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            
                            <div class="mt-3">
                                {{ $menus->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
