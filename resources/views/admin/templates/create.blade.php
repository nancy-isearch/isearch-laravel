@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Create Template</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('templates.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('templates.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
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
                        <h4 class="mb-25">Template Details</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Template Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Template Image (Preview)</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Select Sections for this Template</label>
                                <p class="text-muted small">Select the sections in the order you want them to appear on the page.</p>
                                <div class="row">
                                    @foreach($sectionTemplates as $sectionTemplate)
                                    <div class="col-md-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="sections[]" value="{{ $sectionTemplate->id }}" id="section{{ $sectionTemplate->id }}">
                                            <label class="form-check-label" for="section{{ $sectionTemplate->id }}">
                                                {{ $sectionTemplate->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
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

                <div class="col-lg-12 mb-30">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Save Template</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
