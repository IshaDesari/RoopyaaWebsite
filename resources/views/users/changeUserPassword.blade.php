@extends('layouts.app')

@section('content')
        <div class="body d-flex pb-3">
            <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="border-0 mb-2">
                        <div
                            class="card-header py-2 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Change Password</h3>
                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary btn-set-task w-sm-100">
                                <i class="icofont-arrow-left me-2 fs-6"></i>Back
                            </a>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>

                @include('admin.messages')

                <div class="row g-3">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="rounded p-3 alert-primary pb-2">
                            <h6 class="text-center fw-bold">Confirm User Information</h6>
                            {{-- <small class="text-center">Confirm it before changing the Password</small> --}}

                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">ID</label> : {{ $user->id }}<br>
                                    <label class="form-label">Name</label> : {{ $user->fullname }}<br>
                                    <label class="form-label">Email</label> : {{ $user->email }}<br>
                                    <label class="form-label">Role</label> :
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge alert-light">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">

                        <form method="POST" action="{{ route('user.chpwdsubmit', $user->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Change Password</h6>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">New Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                name="password" autocomplete="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Password Confirmation</label>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" autocomplete="password_confirmation">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12" align="center">
                                            <button type="submit" class="btn btn-primary px-4 btn-set-task w-sm-100">
                                                <i class="icofont-key me-2 fs-6"></i>Update Password
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')
@endsection
