@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp


<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{asset('/home')}}" class="brand-link">
                <img src="{{asset('/BackEndSourcefile')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('/BackEndSourcefile')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Staff
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('show_user_table')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m Staff</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage_user')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n L?? Staff</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Kh??ch H??ng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('manage_customer')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n L?? Kh??ch H??ng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Danh M???c M??n ??n
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('show_cate_table')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage_cate')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n L?? Danh M???c</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-percent"></i>
                                <p>
                                    Voucher
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('show_voucher_table')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m Voucher</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage_voucher')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n L?? Voucher</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    Th???ng K?? ????n ?????t H??ng
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('manage_order')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n L?? ????n ?????t H??ng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-hamburger"></i>
                                <p>
                                    M??n ??n
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('show_food_table')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m M??n ??n</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('manage_food')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n L?? M??n ??n</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>