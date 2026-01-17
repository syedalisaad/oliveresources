@extends( admin_module_layout('master') )
@section('title', 'Email Marketing')
@section('breadcrumbs')
<div class="col-sm-6">
    <h1>Email Marketing</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route(admin_route('dashboard')) }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Lists</li>
    </ol>
</div>
@endsection
@section('content')
<section class="content">

    <div class="container-fluid">
        <form action="{{ route('admin.email-marketing.import') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="fileInput" class="form-label fw-bold">Upload Excel File</label>
                <input type="file" class="form-control" id="fileInput" name="file" required>
            </div>
            <button type="submit" class="btn btn-success w-100">
                <i class="fas fa-upload"></i> Import Data
            </button>
        </form>

        @include( admin_module_view('partials.simple-messages') )

        @if( isAdmin() || getAuth()->can(\Perms::$BLOG['ADD']) )
        @include( admin_module_view('partials.manage-action-buttons'), [
        'actions' => [ 'added' => admin_route('email-marketing.create') ]
        ])
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Email Marketing</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="9%">Actions</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>verificaiton</th>
                                    <th width="12%">Created At</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ admin_asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ admin_asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@push('scripts')
<!-- DataTables -->
<script src="{{ admin_asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ admin_asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ admin_asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

<script>
    $(function() {
        $('#example1').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{{ route(admin_route("email-marketing.ajax.manageable")) }}',
            order: [
                [5, "desc"]
            ],
            columns: [{
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'company',
                    name: 'company'
                },
                {
                    data: 'phone',
                    name: 'phone',
                },
                {
                    data: 'designation',
                    name: 'designation'
                },
                {
                    data: 'in_verified',
                    name: 'in_verified'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                
            ]
        });
    });
</script>
@endpush