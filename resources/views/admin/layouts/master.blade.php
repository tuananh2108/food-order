<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin Dashboard</title>
        <!-- Chart -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <!-- Datatable -->
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables/css/jquery.dataTables.css')}}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{asset('admin/vendor/toastr/css/toastr.min.css')}}">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    </head>

    <body>
        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->


        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="index.php" class="brand-logo">LOGO</a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left"></div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <span>En</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">
                                            <span class="ml-2">En</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <span class="ml-2">Vi</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-account"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="./app-profile.html" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">Profile</span>
                                        </a>
                                        <a href="./page-login.html" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span class="ml-2">Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li>
                            <a class="" href="{{asset('admin/dashboard')}}" aria-expanded="true">
                                <i class="icon icon-home"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon icon-folder-15"></i>
                                <span class="nav-text">Category manager</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{asset('admin/category')}}">List</a></li>
                                <li><a href="{{asset('admin/category/add')}}">Add new</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon icon-coffee"></i>
                                <span class="nav-text">Food manager</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{asset('admin/food')}}">List</a></li>
                                <li><a href="{{asset('admin/food/add')}}">Add new</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{asset('admin/order')}}" aria-expanded="false">
                                <i class="icon icon-payment"></i>
                                <span class="nav-text">Order</span>
                                <span class="msg-counter">{{$qty_order}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('admin/user')}}" aria-expanded="false">
                                <i class="icon icon-single-04"></i>
                                <span class="nav-text">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}" aria-expanded="false">
                                <i class="icon icon-webpage"></i>
                                <span class="nav-text">Sales Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->

            <!--**********************************
                Footer start
            ***********************************-->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2022 © Dashboard</p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul>
                </div>
            </footer>
            <!--**********************************
                Footer end
            ***********************************-->
        </div>

        <!--**********************************
            Modal start
        ***********************************-->
        <div class="modal" tabindex="-1" style="background: rgba(0, 0, 0, 0.3);">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warning</h5>
                    <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="min-width: 240px">
                    <p>Are you sure to delete?</p>
                </div>
                <div class="modal-footer" style="">
                    <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
                    <a href="#" id="btn-delete-modal" class="btn btn-danger">Delete</a>
                </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Modal end
        ***********************************-->

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('admin/js/quixnav-init.js')}}"></script>
        <script src="{{asset('admin/js/custom.min.js')}}"></script>

        <!-- chart js -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <script src="{{asset('admin/vendor/chart/chart.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('admin/js/dashboard/dashboard.js')}}"></script>

        <!-- Datatable -->
        <script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

        <!-- Form -->
        <script src="{{asset('admin/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>

        <!-- Toastr -->
        <script src="./vendor/toastr/js/toastr.min.js"></script>
        <script src="./js/plugins-init/toastr-init.js"></script>

        <!-- Index -->
        <script src="{{asset('admin/js/index.js')}}"></script>
    </body>

</html>
