<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('assets')}}/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">My Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets')}}/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
{{--                {{Auth::user()->name}}--}}
                <a href="#" class="d-block">Ahmet</a>
                <li><a href="/logoutuser"><i class="fa fa-user"></i> Logout</a></li>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin" class="nav-link"> <i class="nav-icon fas fa-home text-yellow"></i>Dashboard</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Order
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Accepted Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shipping Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../../index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/admin/category" class="nav-link"> <i class="nav-icon fas fa-th text-blue"></i>Categories</a>
                </li>

                <li class="nav-item">
                    <a href="/admin/product" class="nav-link"> <i class="nav-icon fas fa-th"></i>Products</a>
                </li>


                <li class="nav-item">
                    <a href="/admin/comment" class="nav-link"> <i class="nav-icon fas fa-comment"></i>Comments</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.faq.index')}}" class="nav-link"> <i class="nav-icon fas fa-question"></i>FAQ</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.message.index')}}" class="nav-link"> <i class="nav-icon fas fa-mail-bulk"></i>Messages</a>
                </li>
                <li class="nav-item">
                    <a href="/admin/user" class="nav-link"> <i class="nav-icon fas fa-user text-green"></i>Users</a>
                </li>
                <li class="nav-item">
                    <a href="/admin/social" class="nav-link"> <i class="nav-icon fas fa-th"></i>Social</a>
                </li>


                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="/admin/setting" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p class="text">Settings</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
