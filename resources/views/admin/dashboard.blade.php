@extends('layouts.app')

@section('header')
@endsection

@section('content')
    <!-- Body: Body -->
    <div class="body d-flex pb-3">
        <div class="container-fluid">
            <div class="row clearfix g-3">
                <div class="col-xl-12 col-lg-12 col-md-12 flex-column">
                    <div class="row g-3">
                        <div class="col-md-12 p-0=">

                            @include('admin.messages')

                            <div class="card">
                                <div
                                    class="card-header py-2 d-flex align-items-center justify-content-between bg-transparent border-bottom flex-wrap">
                                    <h5 class="mb-0 fw-bold"> Dashboard</h5>
                                    <div align="right">
                                        {{-- <a href="{{ route('notification') }}" title="Notifications"
                                            class="btn btn-sm btn-outline-danger btn-set-task w-sm-100">
                                            Notifications
                                            <span class="alert-warning mx-0 ms-2 px-2 py-0 noti-count"
                                                style="margin-bottom: 1rem">
                                                {{ $notifications->count() }}
                                            </span>
                                        </a> --}}
                                    </div>
                                </div>
                                {{-- <div class="card-body">
                                    <div class="row g-3">
                                        @hasanyrole('SuperAdmin')
                                            <div class="col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="avatar lg rounded-1 no-thumbnail light-orange-bg color-defult">
                                                                <i class="icofont-user-suited fs-3"></i>
                                                            </div>
                                                            <div class="flex-fill ms-3">
                                                                <div class="">Super Admins</div>
                                                                <h5 class="mb-0">{{ $totalSuperAdmins }}</h5>
                                                            </div>
                                                            <a href="{{ route('users.index') }}" title="View"
                                                                class="btn btn-link text-decoration-none rounded-1 p-0 py-2">
                                                                <i class="icofont-hand-drawn-right fs-3"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="avatar lg rounded-1 no-thumbnail bg-careys-pink color-defult">
                                                                <i class="icofont-users-alt-1 fs-3"></i>
                                                            </div>
                                                            <div class="flex-fill ms-3">
                                                                <div class="">Admins</div>
                                                                <h5 class="mb-0">{{ $totalAdmins }}</h5>
                                                            </div>
                                                            <a href="{{ route('users.index') }}" title="View"
                                                                class="btn btn-link text-decoration-none rounded-1 p-0 py-2">
                                                                <i class="icofont-hand-drawn-right fs-3"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="avatar lg rounded-1 no-thumbnail light-success-bg color-defult">
                                                                <i class="icofont-users-alt-2 fs-3"></i>
                                                            </div>
                                                            <div class="flex-fill ms-3">
                                                                <div class="">Users</div>
                                                                <h5 class="mb-0">{{ $totalUsers }}</h5>
                                                            </div>
                                                            <a href="{{ route('users.index') }}" title="View"
                                                                class="btn btn-link text-decoration-none rounded-1 p-0 py-2">
                                                                <i class="icofont-hand-drawn-right fs-2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @elserole('Admin')
                                            ADMIN PART
                                            @elserole('User')
                                            USER PART
                                        @endhasanyrole
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->
        </div>
    </div>
@endsection

@section('footer')
@endsection
