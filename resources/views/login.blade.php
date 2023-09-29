<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">

                    <div class="bg-primary bg-soft d-flex justify-content-center">
                        <div class="col-md-5 col-lg-8 col-xl-5">
                            <div class="row">
                            </div>
    
                                <div class="p-2">
                                    <form class="form-horizontal" action="/login" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <h1> <class="card-title mb-4"><center>LOGIN </center></class></h1>
                                            <label for="email" class="form-label"
                                                @error('email')
                                                is-invalid
                                            @enderror>Email</label>
                                            <input autofocus type="text" class="form-control" id="email"
                                                placeholder="Enter email" name="email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password"
                                                    class="form-control
                                                @error('password')
                                                    is-invalid
                                                @enderror
                                                "
                                                    placeholder="Enter password" name="password" aria-label="Password"
                                                    aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i
                                                        class="mdi mdi-eye-outline"></i></button>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                                In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/metismenu/metisMenu.min.js"></script>
    <script src="/libs/simplebar/simplebar.min.js"></script>
    <script src="/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>
</body>

</html>
