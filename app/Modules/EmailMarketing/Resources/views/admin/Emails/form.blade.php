@extends( admin_module_layout('master') )
@section('title', 'Email Marketing')
@php $is_update = (isset($data) && $data); @endphp
@section('breadcrumbs')
<div class="col-sm-6">
    <h1>Email Marketing</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route(admin_route('dashboard')) }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route(admin_route('email-marketing.index')) }}">Lists</a></li>
        <li class="breadcrumb-item active">{{ !$is_update ? 'Add New' : 'Edit' }} Blog</li>
    </ol>
</div>
@endsection

@section('content')
<div class="container-fluid">

    @include( admin_module_view('partials.simple-messages') )
    @php
    $is_active = (old('is_active') ?? $data->is_active ?? 1);

    $action = route(admin_route('email-marketing.store'));
    if ( $is_update ) {
    $action = route(admin_route('email-marketing.update'), [$data->id]);
    }
    @endphp

    <form role="form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf @method( !$is_update ? 'POST' : 'PUT' )
        <div class="row">
            <div class="col-md-6">
                <div class="card card-yarn">
                    <div class="card-header">
                        <h3 class="card-title">{{ !$is_update ? 'Add New' : 'Edit' }} Email Marketing</h3>
                    </div>
                    <div class="card-body">
                        @include( admin_module_render('Emails.form.build-form','EmailMarketing') )
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-yarn">
                    <div class="card-footer">
                        
                        @empty( $is_update )
                        <button type="submit" class="btn btn-yarn" name="formsubmit" value="email-marketing.create">Save & New</button>
                        @endempty

                        @if( isAdmin() || getAuth()->can(\Perms::$BLOG['LIST']) )
                        <button type="submit" class="btn btn-yarn" name="formsubmit" value="email-marketing.index">Save & Exit</button>
                        <button type="button" onclick="javascript:window.location='{{ route(admin_route('email-marketing.index')) }}'" class="btn btn-default">Cancel</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection