<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>

    @include('layouts.preload')

    <!-- External / Needed Scripts -->
    @yield('header')
</head>

<body>
    <!-- Paste this code after body tag -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Ends -->

    <!--
    theme-indigo
    theme-black
    theme-gray
    theme-red
    -->

    <div id="style_layout" class="theme-black">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div class="main px-lg-2 px-md-2">

            <!-- Header -->
            @include('layouts.header')


            <!-- Body -->
            @yield('content')

            <!-- Footer -->
            {{-- @include('layouts.footer') --}}

        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('dist/bundles/libscripts.bundle.js') }}" lang="Javascript" type="text/javascript"></script>

    <!-- Plugin Js-->
    <script src="{{ asset('dist/bundles/dataTables.bundle.js') }}" lang="Javascript" type="text/javascript"></script>

    <script src="{{ asset('dist/plugin/moment.min.js') }}" lang="Javascript" type="text/javascript"></script>

    <!-- Jquery Page Js -->
    <script src="{{ asset('dist/js/template.js') }}" lang="Javascript" type="text/javascript"></script>

    <script type="text/javascript">
        setTimeout(function() {
            // $('.alert').alert('close');
            $('.alert').hide();
        }, 10000);
    </script>

    <!-- External / Needed Scripts -->
    @yield('footer')
</body>

</html>
