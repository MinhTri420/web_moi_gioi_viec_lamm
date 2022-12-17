<html lang="en" data-theme="light" data-layout-mode="fluid" data-topbar-color="light" data-sidenav-size="default"
      data-sidenav-color="dark" data-layout-position="fixed">
<head>
    <meta charset="utf-8">
    <title>Log In |  {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{asset('js/hyper-config.js')}}"></script>


    <!-- App css -->
    <link href="{{asset('css/app-saas.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="authentication-bg">
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
{{--                        <a href="index.html">--}}
{{--                            <span><img src="assets/images/logo.png" alt="logo" height="22"></span>--}}
{{--                        </a>--}}
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form action="#">

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required=""
                                       placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your
                                        password?</small></a>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control"
                                           placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked="">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Log In</button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="pages-register.html"
                                                                        class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<footer class="footer footer-alt">
    2022
    @if( date('Y') !=2022)
        - {{ date('Y') }}
    @endif
    © {{ config('app.name') }}
</footer>
<!-- Vendor js -->
<script src="{{asset('js/vendor.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('js/app.js')}}"></script>


</body>
</html>
