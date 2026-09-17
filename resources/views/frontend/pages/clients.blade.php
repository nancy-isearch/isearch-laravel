@extends('frontend.layouts.app')
@section('content')
<main>
    <section class="sec pt-5 mt-5">
        <div class="container">
            <div class="sec-head mb-5 text-center">
                <h1 class="heading-1">Trusted By <span class="color-primary">Our Clients</span></h1>
                <p class="text-muted">We are proud to work with these amazing companies.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                @forelse($clients as $client)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="card h-100 shadow-sm border-0 rounded-4 text-center p-3 d-flex flex-column align-items-center justify-content-center">
                        @if($client->logo)
                        <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->company_name }}" class="img-fluid mb-2" style="max-height: 80px; object-fit: contain;">
                        @endif
                        <h6 class="mb-1 text-dark">{{ $client->company_name }}</h6>
                        <small class="text-muted" style="font-size: 0.75rem;">
                            @if($client->city || $client->country) {{ $client->city }} {{ $client->country ? ', ' . $client->country : '' }}<br> @endif
                            @if($client->industry) {{ $client->industry }} @endif
                        </small>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>No clients found.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection
