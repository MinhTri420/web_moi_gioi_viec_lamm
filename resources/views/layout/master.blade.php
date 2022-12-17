<html lang="en" data-theme="dark" data-layout-mode="fluid" data-topbar-color="light" data-sidenav-size="default"
      data-sidenav-color="dark" data-layout-position="fixed" class="menuitem-active">
<head>
    <meta charset="utf-8">
    <title>Dashboard |  {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{asset('fonts/favicon.ico')}}">
    <!-- Theme Config Js -->
    <script src="{{asset('js/hyper-config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('css/app-saas.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css">


</head>

<body class="show">
<!-- Begin page -->
<div class="wrapper">

    <!-- ========== Topbar Start ========== -->
    @include('layout.topbar')
    <!-- ========== Topbar End ========== -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('layout.sidebar')
    <!-- ========== Left Sidebar End ========== -->
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @yield('layout.footer')
            <!-- container -->
        </div>
        <!-- content -->
        <!-- Footer Start -->
        @include('layout.footer')
        <!-- end Footer -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->

<script src="{{asset('js/vendor.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>
</div>

</body>

</html>
