<!doctype html>
<html class="no-js" lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yönetim</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="back/assets/images/favicon.ico">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/vendor/cryptocurrency-icons.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/plugins/plugins.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('back') }}/assets/css/style.css">
    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('back') }}/back/assets/css/style-primary.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>

    <style>
        #swal2-title {
            color: black;
        }
    </style>
</head>
<body class="skin-dark">
    <div class="main-wrapper">
        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="{{route('yonetim')}}">
                            <h3>Yönetim</h3>
                        </a>
                    </div><!-- Header Logo (Header Left) End -->
                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">
                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">
                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"></button></div>
                                </div>
                            </div><!-- Side Header Toggle & Search End -->
                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">
                                <ul class="header-notification-area">
                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="name">{{Auth::user()->name}}</span>
                                            </span>
                                        </a>
                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5><a>{{Auth::user()->name}}</a></h5>
                                                <a>{{Auth::user()->email}}</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="{{route('logOut')}}"><i class="zmdi zmdi-lock-open"></i>Çıkış Yap</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Header Notifications Area End -->
                        </div>
                    </div><!-- Header Right End -->
                </div>
            </div>
        </div><!-- Header Section End -->
