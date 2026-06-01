@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Edit Dynamic Page: {{ $page->title }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <a href="{{ route('pages.index') }}" class="btn btn-primary">Back</a>
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
                    <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Basic Info -->
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">Basic Info</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" required value="{{ old('title', $page->title) }}">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Slug <span class="text-danger">*</span></label>
                                        <input type="text" name="slug" class="form-control" required value="{{ old('slug', $page->slug) }}">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1" {{ $page->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $page->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- SEO Info -->
                        <div class="card mb-4">
                            <div class="card-header bg-secondary text-white">SEO Meta Details</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $page->meta_description) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dynamic Sections -->
                        <div class="card mb-4">
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <span>Dynamic Sections</span>
                                <div>
                                    <select id="sectionTypeSelector" class="form-select form-select-sm d-inline-block w-auto me-2">
                                        <option value="hero">Hero Section</option>
                                        <option value="text">Text Content</option>
                                        <option value="services">Services Listing</option>
                                        <option value="features">Features (Image + Text)</option>
                                        <option value="stats">Statistics Counters</option>
                                        <option value="process">Step-by-Step Process</option>
                                    </select>
                                    <button type="button" class="btn btn-sm btn-success" id="addSectionBtn">+ Add Section</button>
                                </div>
                            </div>
                            <div class="card-body bg-light" id="sectionsContainer">
                                @if($page->sections->isEmpty())
                                    <p class="text-muted text-center" id="noSectionsMsg">No sections added yet. Select a section type and click "Add Section".</p>
                                @endif
                                
                                @foreach($page->sections as $index => $section)
                                    @php $content = $section->content ?? []; @endphp
                                    @if($section->section_type === 'hero')
                                        <div class="card mb-3 section-item border-primary">
                                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                                <span>Hero Section</span>
                                                <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="sections[{{ $index }}][type]" value="hero">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label>Title</label>
                                                        <input type="text" name="sections[{{ $index }}][content][title]" class="form-control" value="{{ $content['title'] ?? '' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Subtitle</label>
                                                        <input type="text" name="sections[{{ $index }}][content][subtitle]" class="form-control" value="{{ $content['subtitle'] ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label>Background Image</label>
                                                        <input type="file" name="sections[{{ $index }}][files][background_image]" class="form-control">
                                                        @if(isset($content['background_image']))
                                                            <div class="mt-2">
                                                                <img src="{{ Storage::url($content['background_image']) }}" width="150">
                                                                <input type="hidden" name="sections[{{ $index }}][existing_files][background_image]" value="{{ $content['background_image'] }}">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($section->section_type === 'text')
                                        <div class="card mb-3 section-item border-info">
                                            <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                                                <span>Text Content Section</span>
                                                <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="sections[{{ $index }}][type]" value="text">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label>Heading (Optional)</label>
                                                        <input type="text" name="sections[{{ $index }}][content][heading]" class="form-control" value="{{ $content['heading'] ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label>Content</label>
                                                        <textarea name="sections[{{ $index }}][content][body]" class="form-control editor" rows="4">{{ $content['body'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($section->section_type === 'services')
                                        <div class="card mb-3 section-item border-success">
                                            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                                                <span>Services Section (Dynamic listing)</span>
                                                <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="sections[{{ $index }}][type]" value="services">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label>Section Title</label>
                                                        <input type="text" name="sections[{{ $index }}][content][title]" class="form-control" value="{{ $content['title'] ?? 'Our Services' }}">
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label>Number of items to show</label>
                                                        <input type="number" name="sections[{{ $index }}][content][limit]" class="form-control" value="{{ $content['limit'] ?? 6 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($section->section_type === 'features')
                                        <div class="card mb-3 section-item border-warning">
                                            <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                                                <span>Features Section (Image + Text)</span>
                                                <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="sections[{{ $index }}][type]" value="features">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label>Feature Title</label>
                                                        <input type="text" name="sections[{{ $index }}][content][title]" class="form-control" value="{{ $content['title'] ?? '' }}">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Feature Image</label>
                                                        <input type="file" name="sections[{{ $index }}][files][feature_image]" class="form-control">
                                                        @if(isset($content['feature_image']))
                                                            <div class="mt-2">
                                                                <img src="{{ Storage::url($content['feature_image']) }}" width="150">
                                                                <input type="hidden" name="sections[{{ $index }}][existing_files][feature_image]" value="{{ $content['feature_image'] }}">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label>Description</label>
                                                        <textarea name="sections[{{ $index }}][content][description]" class="form-control editor" rows="3">{{ $content['description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($section->section_type === 'stats')
                                        <div class="card mb-3 section-item border-dark">
                                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                                <span>Statistics Counters</span>
                                                <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="sections[{{ $index }}][type]" value="stats">
                                                <div class="row">
                                                    <div class="col-md-4 mb-2">
                                                        <label>Stat 1 Label & Value</label>
                                                        <input type="text" name="sections[{{ $index }}][content][stat1_label]" class="form-control mb-1" value="{{ $content['stat1_label'] ?? '' }}">
                                                        <input type="text" name="sections[{{ $index }}][content][stat1_value]" class="form-control" value="{{ $content['stat1_value'] ?? '' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label>Stat 2 Label & Value</label>
                                                        <input type="text" name="sections[{{ $index }}][content][stat2_label]" class="form-control mb-1" value="{{ $content['stat2_label'] ?? '' }}">
                                                        <input type="text" name="sections[{{ $index }}][content][stat2_value]" class="form-control" value="{{ $content['stat2_value'] ?? '' }}">
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label>Stat 3 Label & Value</label>
                                                        <input type="text" name="sections[{{ $index }}][content][stat3_label]" class="form-control mb-1" value="{{ $content['stat3_label'] ?? '' }}">
                                                        <input type="text" name="sections[{{ $index }}][content][stat3_value]" class="form-control" value="{{ $content['stat3_value'] ?? '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($section->section_type === 'process')
                                        <div class="card mb-3 section-item border-primary">
                                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                                <span>Step-by-Step Process</span>
                                                <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="sections[{{ $index }}][type]" value="process">
                                                <div class="row">
                                                    <div class="col-md-4 mb-2">
                                                        <label>Badge Text</label>
                                                        <input type="text" name="sections[{{ $index }}][content][badge]" class="form-control" value="{{ $content['badge'] ?? 'HOW WE WORK' }}">
                                                    </div>
                                                    <div class="col-md-8 mb-2">
                                                        <label>Main Heading</label>
                                                        <input type="text" name="sections[{{ $index }}][content][heading]" class="form-control" value="{{ $content['heading'] ?? 'Our 6-Step Digital Marketing Process' }}">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label>Subheading</label>
                                                        <input type="text" name="sections[{{ $index }}][content][subheading]" class="form-control" value="{{ $content['subheading'] ?? '' }}">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6>Process Steps</h6>
                                                <div class="row">
                                                    @for($i=1; $i<=6; $i++)
                                                    <div class="col-md-4 mb-3 border p-2">
                                                        <strong>Step {{ sprintf('%02d', $i) }}</strong>
                                                        <input type="text" name="sections[{{ $index }}][content][steps][{{$i}}][title]" class="form-control form-control-sm mb-1" placeholder="Title" value="{{ $content['steps'][$i]['title'] ?? '' }}">
                                                        <textarea name="sections[{{ $index }}][content][steps][{{$i}}][desc]" class="form-control form-control-sm mb-1" rows="2" placeholder="Description">{{ $content['steps'][$i]['desc'] ?? '' }}</textarea>
                                                        <input type="text" name="sections[{{ $index }}][content][steps][{{$i}}][icon]" class="form-control form-control-sm" placeholder="Icon Class" value="{{ $content['steps'][$i]['icon'] ?? '' }}">
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">Update Page</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Templates for Sections -->
<template id="tpl-section-hero">
    <div class="card mb-3 section-item border-primary">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <span>Hero Section</span>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
        </div>
        <div class="card-body">
            <input type="hidden" name="sections[__INDEX__][type]" value="hero">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label>Title</label>
                    <input type="text" name="sections[__INDEX__][content][title]" class="form-control">
                </div>
                <div class="col-md-6 mb-2">
                    <label>Subtitle</label>
                    <input type="text" name="sections[__INDEX__][content][subtitle]" class="form-control">
                </div>
                <div class="col-md-12 mb-2">
                    <label>Background Image</label>
                    <input type="file" name="sections[__INDEX__][files][background_image]" class="form-control">
                </div>
            </div>
        </div>
    </div>
</template>

<template id="tpl-section-text">
    <div class="card mb-3 section-item border-info">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <span>Text Content Section</span>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
        </div>
        <div class="card-body">
            <input type="hidden" name="sections[__INDEX__][type]" value="text">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <label>Heading (Optional)</label>
                    <input type="text" name="sections[__INDEX__][content][heading]" class="form-control">
                </div>
                <div class="col-md-12 mb-2">
                    <label>Content</label>
                    <textarea name="sections[__INDEX__][content][body]" class="form-control editor" rows="4"></textarea>
                </div>
            </div>
        </div>
    </div>
</template>

<template id="tpl-section-services">
    <div class="card mb-3 section-item border-success">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <span>Services Section (Dynamic listing)</span>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
        </div>
        <div class="card-body">
            <input type="hidden" name="sections[__INDEX__][type]" value="services">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <label>Section Title</label>
                    <input type="text" name="sections[__INDEX__][content][title]" class="form-control" value="Our Services">
                </div>
                <div class="col-md-12 mb-2">
                    <label>Number of items to show</label>
                    <input type="number" name="sections[__INDEX__][content][limit]" class="form-control" value="6">
                </div>
            </div>
        </div>
    </div>
</template>
<template id="tpl-section-features">
    <div class="card mb-3 section-item border-warning">
        <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
            <span>Features Section (Image + Text)</span>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
        </div>
        <div class="card-body">
            <input type="hidden" name="sections[__INDEX__][type]" value="features">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label>Feature Title</label>
                    <input type="text" name="sections[__INDEX__][content][title]" class="form-control" value="Why Choose Us?">
                </div>
                <div class="col-md-6 mb-2">
                    <label>Feature Image</label>
                    <input type="file" name="sections[__INDEX__][files][feature_image]" class="form-control">
                </div>
                <div class="col-md-12 mb-2">
                    <label>Description</label>
                    <textarea name="sections[__INDEX__][content][description]" class="form-control editor" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</template>

<template id="tpl-section-stats">
    <div class="card mb-3 section-item border-dark">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <span>Statistics Counters</span>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
        </div>
        <div class="card-body">
            <input type="hidden" name="sections[__INDEX__][type]" value="stats">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label>Stat 1 Label & Value</label>
                    <input type="text" name="sections[__INDEX__][content][stat1_label]" class="form-control mb-1" placeholder="Projects Delivered">
                    <input type="text" name="sections[__INDEX__][content][stat1_value]" class="form-control" placeholder="500+">
                </div>
                <div class="col-md-4 mb-2">
                    <label>Stat 2 Label & Value</label>
                    <input type="text" name="sections[__INDEX__][content][stat2_label]" class="form-control mb-1" placeholder="Happy Clients">
                    <input type="text" name="sections[__INDEX__][content][stat2_value]" class="form-control" placeholder="100%">
                </div>
                <div class="col-md-4 mb-2">
                    <label>Stat 3 Label & Value</label>
                    <input type="text" name="sections[__INDEX__][content][stat3_label]" class="form-control mb-1" placeholder="Years Experience">
                    <input type="text" name="sections[__INDEX__][content][stat3_value]" class="form-control" placeholder="10+">
                </div>
            </div>
        </div>
    </div>
</template>

<template id="tpl-section-process">
    <div class="card mb-3 section-item border-primary">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <span>Step-by-Step Process</span>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn">Remove</button>
        </div>
        <div class="card-body">
            <input type="hidden" name="sections[__INDEX__][type]" value="process">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label>Badge Text</label>
                    <input type="text" name="sections[__INDEX__][content][badge]" class="form-control" value="HOW WE WORK">
                </div>
                <div class="col-md-8 mb-2">
                    <label>Main Heading</label>
                    <input type="text" name="sections[__INDEX__][content][heading]" class="form-control" value="Our 6-Step Digital Marketing Process">
                </div>
                <div class="col-md-12 mb-3">
                    <label>Subheading</label>
                    <input type="text" name="sections[__INDEX__][content][subheading]" class="form-control" value="We follow a structured step-by-step process to deliver effective digital marketing services that drive results.">
                </div>
            </div>
            <hr>
            <h6>Process Steps (Fill up to 6)</h6>
            <div class="row">
                @for($i=1; $i<=6; $i++)
                <div class="col-md-4 mb-3 border p-2">
                    <strong>Step {{ sprintf('%02d', $i) }}</strong>
                    <input type="text" name="sections[__INDEX__][content][steps][{{$i}}][title]" class="form-control form-control-sm mb-1" placeholder="Title (e.g. Research)">
                    <textarea name="sections[__INDEX__][content][steps][{{$i}}][desc]" class="form-control form-control-sm mb-1" rows="2" placeholder="Description"></textarea>
                    <input type="text" name="sections[__INDEX__][content][steps][{{$i}}][icon]" class="form-control form-control-sm" placeholder="FontAwesome Class (e.g. fa-search)">
                </div>
                @endfor
            </div>
        </div>
    </div>
</template>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // Auto slug generate
        $('[name="title"]').keyup(function () {
            let slug = $(this).val()
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-');
            $('[name="slug"]').val(slug);
        });

        let sectionIndex = {{ $page->sections->count() > 0 ? $page->sections->count() : 0 }};

        $('#addSectionBtn').click(function() {
            $('#noSectionsMsg').hide();
            let type = $('#sectionTypeSelector').val();
            let templateId = '#tpl-section-' + type;
            let templateHtml = $(templateId).html();
            
            // Replace __INDEX__ with current index to ensure unique names for form arrays
            templateHtml = templateHtml.replace(/__INDEX__/g, sectionIndex);
            
            $('#sectionsContainer').append(templateHtml);
            sectionIndex++;
        });

        $(document).on('click', '.remove-section-btn', function() {
            $(this).closest('.section-item').remove();
            if($('.section-item').length === 0) {
                $('#noSectionsMsg').show();
            }
        });
    });
</script>
@endpush