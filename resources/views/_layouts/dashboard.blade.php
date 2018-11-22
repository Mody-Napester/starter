<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

        <title>{{ config('app.name') }} @yield('title')</title>

        <!--Morris Chart CSS -->
        <link href="{{ url('assets/plugins/morris/morris.css') }}" rel="stylesheet">
        <link href="{{ url('assets/plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="{{ url('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ url('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="{{ url('assets/plugins/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ url('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ url('assets/js/modernizr.min.js') }}"></script>


    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <i class="icon-magnet icon-c-logo"></i><span>{{ config('app.name') }}</span>
                        </a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        {{--<li class="list-inline-item dropdown notification-list">--}}
                            {{--<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"--}}
                               {{--aria-haspopup="false" aria-expanded="false">--}}
                                {{--<i class="dripicons-bell noti-icon"></i>--}}
                                {{--<span class="badge badge-pink noti-icon-badge">4</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">--}}
                                {{--<!-- item-->--}}
                                {{--<div class="dropdown-item noti-title">--}}
                                    {{--<h5><span class="badge badge-danger float-right">5</span>Notification</h5>--}}
                                {{--</div>--}}

                                {{--<!-- item-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                    {{--<div class="notify-icon bg-success"><i class="icon-bubble"></i></div>--}}
                                    {{--<p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>--}}
                                {{--</a>--}}

                                {{--<!-- item-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                    {{--<div class="notify-icon bg-info"><i class="icon-user"></i></div>--}}
                                    {{--<p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>--}}
                                {{--</a>--}}

                                {{--<!-- item-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                    {{--<div class="notify-icon bg-danger"><i class="icon-like"></i></div>--}}
                                    {{--<p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>--}}
                                {{--</a>--}}

                                {{--<!-- All-->--}}
                                {{--<a href="javascript:void(0);" class="dropdown-item notify-item notify-all">--}}
                                    {{--View All--}}
                                {{--</a>--}}

                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="list-inline-item notification-list">--}}
                            {{--<a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">--}}
                                {{--<i class="dripicons-expand noti-icon"></i>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li class="list-inline-item notification-list">--}}
                            {{--<a class="nav-link right-bar-toggle waves-light waves-effect" href="#">--}}
                                {{--<i class="dripicons-message noti-icon"></i>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <span>Welcome {{ Auth::user()->name }}</span>
                                <img src="{{ url('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">


                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="md md-settings-power"></i> <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        {{--<li class="hide-phone app-search">--}}
                            {{--<form role="search" class="">--}}
                                {{--<input type="text" placeholder="Search..." class="form-control">--}}
                                {{--<a href=""><i class="fa fa-search"></i></a>--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            @include('_partials.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    {{ config('app.name') }} &copy; {{ date('Y') }}. All rights reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

        <!-- Update Modal -->
        @include('_modals.update')
        <!-- Delete Modal -->
        @include('_modals.delete')

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ url('assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/js/detect.js') }}"></script>
        <script src="{{ url('assets/js/fastclick.js') }}"></script>
        <script src="{{ url('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ url('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ url('assets/js/waves.js') }}"></script>
        <script src="{{ url('assets/js/wow.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ url('assets/js/script.js') }}"></script>

        <!-- jQuery  -->
        <script src="{{ url('assets/plugins/moment/moment.js') }}"></script>

        <script src="{{ url('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>

{{--        <script src="{{ url('assets/pages/jquery.form-advanced.init.js') }}"></script>--}}

        <!-- Required datatable js -->
        <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ url('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/pdfmake.min.') }}"></script>
        <script src="{{ url('assets/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/buttons.print.min.js') }}"></script>

        <!-- Key Tables -->
        <script src="{{ url('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ url('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Selection table -->
        <script src="{{ url('assets/plugins/datatables/dataTables.select.min.js') }}"></script>

        <script src="{{ url('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ url('assets/plugins/raphael/raphael-min.js') }}"></script>

        <script src="{{ url('assets/plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>

        <!-- Todojs  -->
        <script src="{{ url('assets/pages/jquery.todo.js') }}"></script>

        <!-- chatjs  -->
        <script src="{{ url('assets/pages/jquery.chat.js') }}"></script>

        <script src="{{ url('assets/plugins/peity/jquery.peity.min.js') }}"></script>

        <script src="{{ url('assets/js/jquery.core.js') }}"></script>
        <script src="{{ url('assets/js/jquery.app.js') }}"></script>

        <!-- parsleyjs  -->
        <script src="{{ url('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

        <!-- dashboard_2  -->
        <script src="{{ url('assets/pages/jquery.dashboard_2.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

    </body>
</html>