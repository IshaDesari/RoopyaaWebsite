<!doctype html>
<html class="no-js" lang="en" dir="ltr" lang="{{ app()->getLocale() }}">

<head>
    <!-- CSS & JS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link href="{{ asset('front/images/fevicon.ico') }}" rel="shortcut icon" type="image/png" />

    <!-- project css file  -->
    <link href="{{ asset('dist/css/vtcp_style.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/plugin/parsleyjs/css/parsley.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('dist/plugin/datatables/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/plugin/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"
        type="text/css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />

    <!-- Toastr -->
    <link href="{{ asset('dist/plugin/toastr/toastr.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('dist/plugin/toastr/jquery.min.js') }}" lang="Javascript" type="text/javascript"></script>
    <script src="{{ asset('dist/plugin/toastr/toastr.min.js') }}" lang="Javascript" type="text/javascript"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    </script>


    <!-- External / Needed Scripts -->
    @yield('header')
</head>

<body>
    <!-- Paste this code after body tag -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Ends -->

    <!--
    theme-tradewind
    theme-monalisa
    theme-cyan
    theme-indigo
    theme-gray
    theme-purple
    theme-black
    theme-blue
    theme-brown
    theme-navy
    theme-red
    -->

    <div id="style_layout" class="theme-yellow">

        <!-- Sidebar -->
        <?php $page = Route::current()->getName(); ?>


        <div class="sidebar px-3 pt-3 pt-md-2 pb-0 pb-md-0 me-0 gradient">
            <div class="d-flex flex-column h-100">
                <div align="center">
                    <img src="{{ asset('front/images/logo.png') }}"
                        class="m-auto p-2 bg-white vt_logo img-fluid rounded"><br>
                </div>

                {{-- <hr class="dropdown-divider border-light"> --}}

                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-2 mb-0">
                    <li>
                        <a @if ($page == 'home.dashboard') class="m-link active" @else class="m-link" @endif
                            href="{{ route('home.dashboard') }}" title="Dashboard">
                            <i class="icofont-home fs-6"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <hr class="dropdown-divider border-light">

                    <li>
                        <a @if ($page == 'contacts.index') class="m-link active" @else class="m-link" @endif
                            href="{{ route('contacts.index') }}" title="Contacts">
                            <i class="icofont-ui-message fs-6"></i>
                            <span>Contacts</span>
                        </a>
                    </li>
                </ul>

                <!-- Menu: menu collapse btn -->
                <button class="btn btn-sm btn-link= sidebar-mini-btn text-light m-0 p-0"
                    title="Sidebar Expand / Collapse" style="line-height: 24px">
                    <span class="p-0 m-0"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>



        <div class="main px-lg-2 px-md-2">

            <!-- Header -->
            {{-- @include('layouts.header') --}}
            <div class="header">
                <nav class="navbar py-2">
                    <div class="container-fluid">

                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="d-flex">
                                <a class="nav-link text-dark" href="{{ route('clearcache') }}" title="Clear Cache">
                                    <i class="icofont-cc fs-4"></i>
                                </a>
                            </div>

                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <div class="mb-0 text-end line-height-sm">
                                        <span class="font-weight-bold">
                                            {{ $loginName }}
                                        </span>
                                    </div>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" alt="profile"
                                        @if (Auth::user()->profilepicture) src="{{ asset('images/user/' . Auth::user()->profilepicture) }}"
                                    @else src="{{ asset('dist/images/default-userprofile.png') }}" @endif>
                                </a>
                                <div
                                    class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280 p-0 m-0">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1=">
                                                <img class="avatar rounded-circle mt-1" alt="profile"
                                                    @if (Auth::user()->profilepicture) src="{{ asset('images/user/' . Auth::user()->profilepicture) }}"
                                                @else src="{{ asset('dist/images/default-userprofile.png') }}" @endif>
                                                <div class="flex-fill ms-2 p-0">
                                                    <div class="mb-0 pt-2=">
                                                        <strong>
                                                            {{ $loginName }}
                                                        </strong>
                                                    </div>
                                                    {{-- <small>{{ Auth::user()->roles[0]->name }}</small> --}}
                                                    <small class="">{{ Auth::user()->email }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group m-2">
                                            <hr class="dropdown-divider border-dark m-0">

                                            <a href="{{ route('profile.view') }}"
                                                class="list-group-item list-group-item-action border-0"><i
                                                    class="icofont-ui-user fs-6 me-2"></i>Profile Page</a>

                                            {{-- <a href="{{ route('profile.chpwd') }}"
                                                class="list-group-item list-group-item-action border-0">
                                                <i class="icofont-key fs-6 me-2"></i>Change Password</a> --}}

                                            <a href="{{ route('logout') }}"
                                                class="list-group-item list-group-item-action border-0"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="icofont-logout fs-6 me-2"></i>Signout</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- main menu change financial year -->
                        <div class="order-0 col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-2 mb-md-0">

                        </div>
                    </div>
                </nav>
            </div>



            <!-- Body -->
            @yield('content')

        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('dist/bundles/libscripts.bundle.js') }}" lang="Javascript" type="text/javascript"></script>

    <!-- Plugin Js-->
    <script src="{{ asset('dist/bundles/dataTables.bundle.js') }}" lang="Javascript" type="text/javascript"></script>
    <script src="{{ asset('dist/plugin/parsleyjs/js/parsley.js') }}" lang="Javascript" type="text/javascript"></script>

    <script src="{{ asset('dist/plugin/moment.min.js') }}" lang="Javascript" type="text/javascript"></script>

    <!-- Jquery Page Js -->
    <script src="{{ asset('dist/js/template.js') }}" lang="Javascript" type="text/javascript"></script>

    <script type="text/javascript">
        setTimeout(function() {
            // $('.alert').alert('close');
            $('.alert').hide();
        }, 10000);
    </script>

    <script>
        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(/[^\u0100-\uFFFF\w\-]/g, '-') // Remove all non-word chars ( fix for UTF-8 chars )
                .replace(/\-\-+/g, '-') // Replace multiple - with single -
                .replace(/^-+/, '') // Trim - from start of text
                .replace(/-+$/, ''); // Trim - from end of text
        }
    </script>

    <!-- External / Needed Scripts -->
    @yield('footer')
</body>

</html>
