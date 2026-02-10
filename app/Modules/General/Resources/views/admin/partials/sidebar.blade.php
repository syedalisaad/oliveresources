<div class="sidebar">
    <!-- Sidebar user -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="#" class="d-block">{{ getAuth()->full_name ?? '' }}</a>
        </div>
    </div>

    <nav class="mt-2 constActiveSidebar">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat text-sm nav-legacy nav-compact nav-child-indent"
            data-widget="treeview" role="menu" data-accordion="false">

            <!-- Dashboard -->
            <li class="nav-item">
                <a href="{{ route(admin_route('dashboard')) }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- User Management -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>User Management <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route(admin_route('user.index')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User Data List</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route(admin_route('user.unverified.index')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Resend Account Activation</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route(admin_route('hospitalsurvey.change_info_req')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User Update Request</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- General User -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hospital-user"></i>
                    <p>General User <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route(admin_route('hospitalsurvey.list')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User List</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Payments -->
            <li class="nav-item">
                <a href="{{ route(admin_route('order.delivered.manage')) }}" class="nav-link">
                    <i class="nav-icon fas fa-dolly-flatbed"></i>
                    <p>User Payments</p>
                </a>
            </li>

            <!-- Marketing -->
            <li class="nav-header">MARKETING</li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Email Marketing <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route(admin_route('email-marketing.index')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Import or Create Email</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route(admin_route('email-template.index')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Email Template</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Blogs -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>Blogs Management <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route(admin_route('blog.create')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add New</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route(admin_route('blog.index')) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Pages -->
            <li class="nav-item">
                <a href="{{ route(admin_route('page.index')) }}" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Page Management</p>
                </a>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a href="{{ route(admin_route('site.setting')) }}" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Settings</p>
                </a>
            </li>

            <!-- Logout -->
            <li class="nav-item">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </nav>
</div>

@push('modals')
<div class="modal fade" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Logout</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-yarn"
                        onclick="window.location='{{ route(admin_route('logout')) }}'">
                    Logout
                </button>
            </div>
        </div>
    </div>
</div>
@endpush
