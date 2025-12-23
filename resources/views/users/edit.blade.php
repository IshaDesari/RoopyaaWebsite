@extends('layouts.app')

@section('content')
    <div class="body d-flex pb-3">
        <div class="container-fluid">

            <div class="row align-items-center">
                <div class="border-0 mb-2">
                    <div
                        class="card-header py-2 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">

                            <h3 class="fw-bold mb-0">Edit Profile</h3>
                                <a href="{{ route('profile.view') }}" class="btn btn-sm btn-secondary btn-set-task w-sm-100">
                                    <i class="icofont-arrow-left me-2 fs-6"></i>Back</a>
                    </div>
                </div>
            </div> <!-- Row end  -->

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>

                </ol>
            </nav>
            @include('admin.messages')

            <form class="form form-horizontal" action="{{ route('users.update', $user->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row border-0">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card border-0 p-0 m-0 bg-transparent">
                            <div class="card-body p-0 m-0 bg-transparent">
                                <div class="row g-3">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div
                                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                                <h6 class="m-0 fw-bold">User Information</h6>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-md-6">
                                                        <label for="fullname" class="form-label">Fullname</label>
                                                        <input type="text" id="fullname" name="fullname"
                                                            class="form-control @error('fullname') is-invalid @enderror"
                                                            placeholder="Enter Fullname" value="{{ $user->fullname }}"
                                                            required>
                                                        @error('firstname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" id="email" name="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            placeholder="Enter Email" value="{{ $user->email }}" required>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="phone" class="form-label">Phone Number</label>
                                                        <input type="number" id="phone" name="phone"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            placeholder="Enter Phone Number" value="{{ $user->phone }}"
                                                            required>
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card mb-3">
                                            <div class="card-body pt-3">
                                                <h6 class="m-0 fw-bold">Upload Profile Image</h6>
                                                <small class="d-block text-muted mb-2">
                                                    Only portrait or square image | 2MB max-size | 2000px max-height
                                                </small>
                                                <input type="file" name="profilepicture" id="dropify_photo"
                                                    class="dropify" data-allowed-formats="portrait square"
                                                    data-max-file-size="2M" data-max-height="2000"
                                                    @if ($user->profilepicture) data-default-file="{{ asset('images/user/' . $user->profilepicture) }}" @endif>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-sm btn-primary" value="Update">
                                <input type="reset" class="btn btn-sm btn-secondary text-white" value="Reset">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- Row end  -->
    </div>
@endsection

@section('footer')
    <!--plugin css file -->
    <link href="{{ asset('dist/plugin/cropper/cropper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/plugin/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Jquery Plugin -->
    <script src="{{ asset('dist/plugin/cropper/cropper.min.js') }}"></script>
    <script src="{{ asset('dist/plugin/cropper/cropper-init.js') }}"></script>
    <script src="{{ asset('dist/bundles/dropify.bundle.js') }}"></script>

    <script>
        $(function() {
            $('.dropify').dropify();

            var dropify_photo = $('#dropify_photo').dropify();
            dropify_photo.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            dropify_photo.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
        });
    </script>
@endsection
