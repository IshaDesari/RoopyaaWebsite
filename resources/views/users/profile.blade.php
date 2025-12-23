@extends('layouts.app')

@section('content')
        <!-- Body: Body -->
        <div class="body d-flex pb-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="border-0 mb-2">
                        <div
                            class="card-header py-2 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Profile</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                    </ol>
                </nav>

                <div class="row g-3">
                    <div class="col-xl-4 col-lg-5 col-md-12">

                        <!-- User Profile -->
                        <div class="card profile-card flex-column mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">My Profile</h6>
                            </div>
                            <div class="card-body d-flex profile-fulldetail flex-column">
                                <div class="profile-block text-center w220 mx-auto">
                                    <img @if ($user->profilepicture) src="{{ asset('images/user/' . $user->profilepicture) }}"
                                    @else
                                        src="{{ asset('dist/images/default-userprofile.png') }}" @endif
                                        alt="" class="avatar xl rounded img-thumbnail shadow-sm">

                                  
                                            <a href="{{ route('profile.editProfile') }}" class="btn btn-sm btn-primary"
                                                style="position: absolute;top:15px;right: 15px;" title="Edit">
                                                <i class="icofont-ui-edit"></i>
                                            </a>
                                     

                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                        <span class="text-muted small">ID : #{{ $user->id }}</span>
                                    </div>
                                </div>
                                <div class="profile-info w-100">
                                    <div class="row g-3 pt-2">
                                        <div class="col-xl-6">
                                            <div class="align-items-center">
                                                <label class="form-label fw-bold mb-1">Password</label>
                                                <div class="text-warning">{{ $user->pwd }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">

                        <!-- User Information -->
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Profile Information</h6>
                            </div>
                            <div class="card-body d-flex flex-column pt-0">
                                <div class="row g-3">
                                    <div class="col-xl-6">
                                        <div class="align-items-center">
                                            <label class="form-label fw-bold mb-1">Full Name</label>
                                            <div>
                                                @if ($user->fullname)
                                                    {{ $user->fullname }}
                                                @else
                                                    <span class="text-danger">Not Submitted</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="align-items-center">
                                            <label class="form-label fw-bold mb-1">Email Address</label>
                                            <div>
                                                @if ($user->email)
                                                    {{ $user->email }}
                                                @else
                                                    <span class="text-danger">Not Submitted</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="align-items-center">
                                            <label class="form-label fw-bold mb-1">Phone Number</label>
                                            <div>
                                                @if ($user->phone)
                                                    {{ $user->phone }}
                                                @else
                                                    <span class="text-danger">Not Submitted</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
@endsection
