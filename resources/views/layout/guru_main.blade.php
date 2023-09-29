<!doctype html>
<html lang="en">

<!-- Header -->
<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2023 04:57:42 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- datepicker css -->
    <link href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    {{-- Signature Pad --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

</head>

<body  class="bg-dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header justify-content-end">


                <div class="d-flex">
                    <div>
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a class="d-none d-xl-inline-block ms-1" href="{{ '/kegiatan/create' }}" key="t-henry">ISI
                                AGENDA</span>
                        </button>
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a class="d-none d-xl-inline-block ms-1 text-danger" href="{{ '/logout' }}" key="t-henry">                                LOGOUT</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </header>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="card mx-auto p-2 rounded-4" style="width: 600px; margin-top: 100px;">
        <div class="card-body">
            <div class="main content">
                <div class="flex-grow-1 align-self-center margin-top: 10px;">
                    <div class="text-muted">
                        <p class="mb-2">Welcome to Agenda guru</p>
                        <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                        <p class="mb-0">GURU</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="page-content">
        <div class="container">
            @yield('titel')
            @yield('kontenguru')
        </div>
    </div>
    </div>

    <!-- end row -->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
    
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/metismenu/metisMenu.min.js"></script>
    <script src="/libs/simplebar/simplebar.min.js"></script>
    <script src="/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Saas dashboard init -->
    <script src="/js/pages/saas-dashboard.init.js"></script>

    <script src="/js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2023 04:57:42 GMT -->

</html>
