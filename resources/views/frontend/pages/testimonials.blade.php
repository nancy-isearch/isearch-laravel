@extends('frontend.layouts.app')
@section('content')
<main>
    <section class="sec pt-5 mt-5">
        <div class="container">
            <div class="sec-head mb-5 text-center">
                <h1 class="heading-1">Our <span class="color-primary">Testimonials</span></h1>
                <p class="text-muted">What our clients say about us.</p>
            </div>
            
            <div class="row g-4">
                @forelse($testimonials as $testimonial)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 p-4">
                        <div class="d-flex align-items-center mb-3">
                            @if($testimonial->logo)
                            <div class="me-3">
                                <img src="{{ asset('storage/' . $testimonial->logo) }}" alt="{{ $testimonial->name }}" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
                            </div>
                            @endif
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $testimonial->name }}</h5>
                                <p class="text-muted mb-0 small">{{ $testimonial->designation }}</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text fst-italic">"{{ $testimonial->testimonial }}"</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 px-0 pb-0 pt-3 mt-auto">
                            <small class="text-muted">
                                @if($testimonial->industry) <strong>Industry:</strong> {{ $testimonial->industry }} <br> @endif
                                @if($testimonial->service) <strong>Service:</strong> {{ $testimonial->service }} <br> @endif
                                @if($testimonial->city || $testimonial->country) <strong>Location:</strong> {{ $testimonial->city }} {{ $testimonial->country ? ', ' . $testimonial->country : '' }} @endif
                            </small>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>No testimonials found.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection
