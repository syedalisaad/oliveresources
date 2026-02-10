@extends( admin_module_layout('master') )

@section('title', 'Site Configurations')

@push('css')
<style>
    .card {
        margin-bottom: 0rem;
    }
</style>
@endpush

@section('breadcrumbs')
<div class="col-sm-6">
    <h1>Site Configurations</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route(admin_route('dashboard')) }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Setting</li>
    </ol>
</div>
@endsection

@section('content')

@php
    $tab = session('account-tab') ?? 'general';
@endphp

@include( admin_module_layout('partials.simple-messages') )

<div class="card">
    <div class="card-header p-2">
        <ul class="nav nav-pills">

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'general' ? 'active' : '' }}" href="#general" data-toggle="tab">
                    <i class="fas fa-cogs"></i> General
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'social-network' ? 'active' : '' }}" href="#social-network" data-toggle="tab">
                    <i class="fas fa-share-alt"></i> Social Network
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'contact-support' ? 'active' : '' }}" href="#contact-support" data-toggle="tab">
                    <i class="fas fa-question-circle"></i> Contact Support
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'frontend-support' ? 'active' : '' }}" href="#frontend-support" data-toggle="tab">
                    <i class="fas fa-question-circle"></i> Frontend Support
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'payment-gateway' ? 'active' : '' }}" href="#payment-gateway" data-toggle="tab">
                    <i class="fas fa-credit-card"></i> Payment Gateways
                </a>
            </li>

            <li class="nav-item" style="display:none;">
                <a class="nav-link {{ $tab == 'hospital-survey' ? 'active' : '' }}" href="#hospital-survey" data-toggle="tab">
                    <i class="fas fa-question-circle"></i> Hospital Survey Jobs
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'change-password' ? 'active' : '' }}" href="#change-password" data-toggle="tab">
                    <i class="fas fa-key"></i> Change Password
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'announcements' ? 'active' : '' }}" href="#announcements" data-toggle="tab">
                    <i class="fas fa-bullhorn"></i> Announcement
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $tab == 'auth-setting' ? 'active' : '' }}" href="#auth-setting" data-toggle="tab">
                    <i class="fas fa-user"></i> Edit Profile
                </a>
            </li>

            @if(getAuth()->is_developer)
                <li class="nav-item">
                    <a class="nav-link {{ $tab == 'developer-option' ? 'active' : '' }}" href="#developer-option" data-toggle="tab">
                        <i class="fas fa-user-secret"></i> Developer Options
                    </a>
                </li>
            @endif

        </ul>
    </div>

    <div class="tab-content">

        <div class="tab-pane {{ $tab == 'general' ? 'active' : '' }}" id="general">
            @include( admin_module_render('tab-bucket.general') )
        </div>

        <div class="tab-pane {{ $tab == 'social-network' ? 'active' : '' }}" id="social-network">
            @include( admin_module_render('tab-bucket.social-network') )
        </div>

        <div class="tab-pane {{ $tab == 'contact-support' ? 'active' : '' }}" id="contact-support">
            @include( admin_module_render('tab-bucket.contact-support') )
        </div>

        <div class="tab-pane {{ $tab == 'payment-gateway' ? 'active' : '' }}" id="payment-gateway">
            @include( admin_module_render('tab-bucket.payment-gateways') )
        </div>

        <div class="tab-pane {{ $tab == 'frontend-support' ? 'active' : '' }}" id="frontend-support">
            @include( admin_module_render('tab-bucket.frontend-support') )
        </div>

        <div class="tab-pane {{ $tab == 'hospital-survey' ? 'active' : '' }}" id="hospital-survey">
            @include( admin_module_render('tab-bucket.hospital-survey') )
        </div>

        <div class="tab-pane {{ $tab == 'change-password' ? 'active' : '' }}" id="change-password">
            @include( admin_module_render('tab-bucket.change-password') )
        </div>

        <div class="tab-pane {{ $tab == 'auth-setting' ? 'active' : '' }}" id="auth-setting">
            @include( admin_module_render('tab-bucket.auth-setting') )
        </div>

        <div class="tab-pane {{ $tab == 'announcements' ? 'active' : '' }}" id="announcements">
            @include( admin_module_render('tab-bucket.announcement') )
        </div>

        @if(getAuth()->is_developer)
            <div class="tab-pane {{ $tab == 'developer-option' ? 'active' : '' }}" id="developer-option">
                @include( admin_module_render('tab-bucket.developer-option') )
            </div>
        @endif

    </div>
</div>

@stop
