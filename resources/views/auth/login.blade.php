<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="shortcut icon" type="image/png" />

    <!-- project css file  -->
    <link href="{{ asset('dist/css/vtcp_style.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        #background {
            /* background: url("{{ asset('dist/images/hoarding.png') }}");
            background-repeat: no-repeat;
            background-size: auto; */

            /* width: 100vw; */
            /* height: 100vh; */
            background: url("{{ asset('dist/images/hoarding.png') }}");
            background-size: cover;
        }
    </style>
</head>

<body id="background=">

    <div id="style_layout" class="theme-yellow">
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
                                    <img src="{{ asset('front/images/logo.png') }}" class="img-thumbnail" alt="" />
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 bg-primary text-light" style="max-width: 32rem;">

                                @include('admin.messages')

                                <!-- Form -->
                                <form class="row g-1 p-3 p-md-4" method="POST"class="form-horizontal"
                                    action="{{ route('loginValidate') }}" autocomplete="off">
                                    @csrf

                                    <div class="col-12 text-center mb-1 mb-lg-5">
                                        <h1>Sign in</h1>
                                        <span>Login to access your dashboard.</span>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="email" class="form-label">
                                                Email address
                                            </label>
                                            <input type="text" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email address" autocomplete="off" required autofocus
                                                style="width: 98.5%; min-height: calc(1.5em + 1rem );">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control= form-control-lg @error('password') is-invalid @enderror"
                                                    placeholder="**********" required autocomplete="current-password"
                                                    style="border: 0px solid #f0f0f0; border-collapse: collapse; width: 98.5%; min-height: calc(1.5em + 1rem ); border-radius: 5px; padding: 0 10px; font-size: 16px">
                                                <i class="bi= bi-eye-slash= icofont-eye-blocked" id="togglePassword"
                                                    style="margin-left: -40px; cursor: pointer; color: #333; font-size: 18px"></i>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div align="right">
                                            @if (Route::has('password.request'))
                                                <a class="link-secondary"
                                                    href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <input type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase"
                                            atl="signin" value="SIGN IN">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('dist/bundles/libscripts.bundle.js') }}"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            // this.classList.toggle('bi-eye');
            this.classList.toggle('icofont-eye');
        });
    </script>

    <script type="text/javascript">
        setTimeout(function() {
            $('.alert').alert('close');
        }, 7000);
    </script>

</body>

</html>
