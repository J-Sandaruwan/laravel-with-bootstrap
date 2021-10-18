<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Okto Tech Zone')</title>

    <meta name="description" content="@yield('description','Okto Tech Zone')">
    <meta name="keywords" content="Okto Tech">

    <meta property="og:title" content="@yield('ogtitle','Okto Tech Zone')" />
    <meta property="og:url" content="{{Request::url()}}" />

    <meta property="og:type" content="@yield('ogtype','website')" />

    <meta property="og:image" content="@yield('ogimage',asset('images/favicon.png') )" />
    <meta property="og:image:secure_url" content="@yield('ogimage', asset('images/favicon.png') )" />
    <meta property="og:image:width" content="@yield('ogimagewidth',500)" />
    <meta property="og:image:height" content="@yield('ogimageheight',200)" />
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    @include('libraries.styles')
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body data-sidebar="dark">


    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('components.header')


        <!-- ========== Left Sidebar Start ========== -->

        @include('components.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            {{ $content??'' }}

            <!-- End Page-content -->

            <!-- Transaction Modal -->


            <!-- end modal -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('libraries.scripts')
    @include('components.modal')
</body>

</html>
