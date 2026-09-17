@extends('admin.layouts.app')

@section('content')
<section class="section dash-page">
    <div class="container-fluid">

        {{-- ══ PAGE HEADER ══ --}}
        <div class="dash-header">
            <div class="dash-header__left">
                <span class="dash-eyebrow">
                    Admin Panel
                </span>
                <h2 class="dash-title">Welcome to <em>Dashboard</em></h2>
                <p class="dash-subtitle">Here's what's happening with your store today</p>
            </div>
            <div class="dash-header__right">
                <div class="dash-date-badge">
                    <i class="lni lni-calendar"></i>
                    <span id="dashTodayDate"></span>
                </div>
            </div>
        </div>



    </div>
</section>
@endsection

@push('scripts')
<script>
    // ── Today's date in header ──
    (function() {
        const opts = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('dashTodayDate').textContent = new Date().toLocaleDateString('en-IN', opts);
    })();
</script>
@endpush
