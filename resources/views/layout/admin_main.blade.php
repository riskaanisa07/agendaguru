<!doctype html>
<html lang="en">

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

</head>

<body class="bg-dark" data-layout-mode="light">
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header justify-content-end">


                <div class="d-flex">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <a class="d-none d-xl-inline-block ms-1" href="/guru" key="t-henry"> DATA
                            GURU</a>
                    </button>
                    <div>
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a class="d-none d-xl-inline-block ms-1" href="/agenda" key="t-henry">AGENDA GURU</span>
                        </button>
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a class="d-none d-xl-inline-block ms-1 text-danger" href="{{ '/logout' }}" key="t-henry">                                LOGOUT</span>
                        </button>
                        <button type="button" class="btn header-item waves-effect" aria-haspopup="true" aria-expanded="false">
                          
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth()->user()->name }}</span>
                            <a href="/profil"></a>
                        </button>
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
                        <p class="mb-0">{{ auth()->user()->role }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="page-content">
        <div class="container">
            @yield('titel')
            @yield('kontenadmin')
        </div>
    </div>
    </div>

    <!-- end row -->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
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

</html>
