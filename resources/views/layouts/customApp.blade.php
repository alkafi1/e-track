<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name', 'Simple Task Management System') }}</title>

    <meta name="description"
        content="A Simple Task Management System is a software solution designed to help users organize, assign, and track tasks efficiently. It allows users to create, prioritize, and manage tasks in a streamlined and user-friendly way. Ideal for teams and individuals seeking to boost productivity." />
    <meta name="keywords"
        content="task management, to-do list, task tracking, productivity, project management, team collaboration, task prioritization" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Simple Task Management" />
    <meta property="og:url" content="#/SimpleTaskManagement" />
    <meta property="og:site_name" content="Simple Task Management" />
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="{{ asset('public/assets/img/etracker-logo-1.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('public/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('includes.sidebar')
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('includes.header')
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid">
                        <div id="kt_content_container" class="container-xxl">
                            <!-- main content admin start -->
                            @yield('main-content')
                            <!-- main content admin end -->
                        </div>
                    </div>
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                @include('includes.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <!-- Scroll top icon here -->
        </span>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
    @stack('js-content')
</body>
<!--end::Body-->

</html>
