@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Add Menu</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('menus.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-style mb-30">
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf

                        <!-- Basic Info -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">Menu Info</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label>Menu Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label>Location (e.g. Header, Footer)</label>
                                        <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Menu Items -->
                        <div class="card mb-4">
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <span>Menu Items</span>
                                <button type="button" class="btn btn-sm btn-success" id="addMenuItemBtn">+ Add Menu Item</button>
                            </div>
                            <div class="card-body bg-light" id="menuItemsContainer">
                                <p class="text-muted text-center" id="noMenuItemsMsg">No items added yet. Click "Add Menu Item" to start.</p>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">Save Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<template id="tpl-menu-item">
    <div class="card mb-2 menu-item border-secondary">
        <div class="card-body p-3">
            <div class="row align-items-end">
                <div class="col-md-3">
                    <label>Link Title <span class="text-danger">*</span></label>
                    <input type="text" name="items[__INDEX__][title]" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Link to Dynamic Page</label>
                    <select name="items[__INDEX__][page_id]" class="form-select page-select">
                        <option value="">-- Custom URL --</option>
                        @foreach($pages as $p)
                            <option value="{{ $p->id }}">{{ $p->title }} (/{{ $p->slug }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Or Custom URL</label>
                    <input type="text" name="items[__INDEX__][url]" class="form-control custom-url-input" placeholder="https://...">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger remove-item-btn w-100"><i class="lni lni-trash-can"></i> X</button>
                </div>
            </div>
        </div>
    </div>
</template>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        let itemIndex = 0;

        $('#addMenuItemBtn').click(function() {
            $('#noMenuItemsMsg').hide();
            let templateHtml = $('#tpl-menu-item').html();
            templateHtml = templateHtml.replace(/__INDEX__/g, itemIndex);
            
            $('#menuItemsContainer').append(templateHtml);
            itemIndex++;
        });

        $(document).on('click', '.remove-item-btn', function() {
            $(this).closest('.menu-item').remove();
            if($('.menu-item').length === 0) {
                $('#noMenuItemsMsg').show();
            }
        });

        $(document).on('change', '.page-select', function() {
            let customUrlInput = $(this).closest('.row').find('.custom-url-input');
            if ($(this).val() !== "") {
                customUrlInput.val('');
                customUrlInput.prop('readonly', true);
            } else {
                customUrlInput.prop('readonly', false);
            }
        });
    });
</script>
@endpush
