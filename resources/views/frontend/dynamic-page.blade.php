@extends('frontend.layouts.app')

@section('content')
    {{-- Push Dynamic CSS for sections if individual file exists --}}
    @push('styles')
        @if($page->pageSections)
            @foreach($page->pageSections as $section)
                @if($section->sectionTemplate)
                    @php
                        $slug = $section->sectionTemplate->slug;
                        $cssPath = 'assets/frontend/css/pages/sections/' . $slug . '.css';
                    @endphp
                    @if(file_exists(public_path($cssPath)))
                        <link rel="stylesheet" href="{{ asset($cssPath) }}">
                    @endif
                @endif
            @endforeach
        @endif
    @endpush

    <main class="page-content">
        @if($page->pageSections)
            @foreach($page->pageSections as $section)
                @if($section->sectionTemplate)
                    @php
                        $slug = $section->sectionTemplate->slug;
                        $content = $section->section_data ?? [];
                    @endphp
                    
                    {{-- Include the dynamic section view if it exists --}}
                    @if(view()->exists('frontend.pages.sections.' . $slug))
                        @include('frontend.pages.sections.' . $slug, ['content' => $content])
                    @else
                        @if(config('app.debug'))
                            <div class="container py-4 text-center border bg-light my-2">
                                <p class="text-danger mb-0">Missing view for section: <strong>{{ $slug }}</strong> (resources/views/frontend/pages/sections/{{ $slug }}.blade.php)</p>
                            </div>
                        @endif
                    @endif
                @endif
            @endforeach
        @endif
    </main>
@endsection
