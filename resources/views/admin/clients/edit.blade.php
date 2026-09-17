@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Client</h6>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="company_name" class="form-label">Company Name *</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $client->company_name) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="logo" class="form-label">Company Logo</label>
                                @if($client->logo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $client->logo) }}" alt="Logo" style="height: 50px;">
                                    </div>
                                @endif
                                <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $client->city) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $client->country) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="industry" class="form-label">Industry</label>
                                <input type="text" class="form-control" id="industry" name="industry" value="{{ old('industry', $client->industry) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="service" class="form-label">Service</label>
                                <input type="text" class="form-control" id="service" name="service" value="{{ old('service', $client->service) }}">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Client</button>
                        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
