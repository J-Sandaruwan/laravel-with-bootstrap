<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Okto Zone')</title>
    <meta name="description" content="@yield('description','Okto Zone')" />

    <meta property="og:title" content="@yield('ogtitle','Okto Zone')" />
    <meta property="og:url" content="{{Request::url()}}" />

    <meta property="og:type" content="@yield('ogtype','website')" />

    <meta property="og:image" content="@yield('ogimage',asset('/images/logo.svg') )" />
    <meta property="og:image:secure_url" content="@yield('ogimage', asset('/images/logo.svg') )" />
    <meta property="og:image:width" content="@yield('ogimagewidth',500)" />
    <meta property="og:image:height" content="@yield('ogimageheight',200)" />
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('libraries.styles')
</head>

<body data-sidebar="dark">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">


            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item">
                        <img class="" src="/images/flags/sl.jpg" alt="Header" height="16">
                    </button>
                </div>

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dropdown d-inline-block">

                </div>

                <div class="  ms-1">
                    <button type="button" class="btn header-item noti-icon">
                        <div class="theme-mode" onclick="setDarkOrLight()"></div>
                    </button>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-customize"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="px-lg-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="https://github.com/J-Sandaruwan" target="_bank">
                                        <img src="/images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">

            {{ $content??'' }}
        </div>
    </div>
    <!-- Begin page -->

    <!-- END layout-wrapper -->

    @include('libraries.scripts')
</body>

</html>
