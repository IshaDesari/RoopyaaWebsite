<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link href="{{ asset('dist/images/favicon.png') }}" rel="shortcut icon" type="image/png" />

    <!-- project css file  -->
    <link href="{{ asset('dist/css/vtcp_style.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="style_layout" class="theme-brown">
        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">
            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div
                            class="col-lg-6 d-none= d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 35rem;">
                                <div class="text-center m-0">
                                    <img src="{{ asset('dist/images/logo.png') }}" class="img-thumbnail" alt="" />
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 bg-primary text-light" style="max-width: 32rem;">

                                @include('admin.messages')

                                <form class="row g-1 p-3 p-md-4" method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="col-12 text-center mb-5">
                                        {{-- <img src="{{ asset('dist/images/forgot-password.svg') }}" class="w240 mb-4"
                                            alt="" /> --}}
                                        <h1>Forgot password?</h1>
                                        <span>Enter the email address you used when you joined and we'll send you
                                            instructions to
                                            reset your password.</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" name="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                placeholder="name@example.com" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <input type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase"
                                            atl="forget_password" value="{{ __('Submit') }}">
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span class="text-muted">
                                            <a href="{{ route('home.index') }}" class="link-secondary">
                                                Back to Sign in
                                            </a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- End Row -->

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ url('dist/bundles/libscripts.bundle.js') }}"></script>

    <script type="text/javascript">
        setTimeout(function() {
            $('.alert').alert('close');
        }, 7000);
    </script>
</body>

</html>
