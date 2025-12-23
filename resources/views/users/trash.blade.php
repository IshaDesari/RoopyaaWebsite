@extends('layouts.app')

@section('header')
@endsection

@section('content')
    @can('user-trash')
        <!-- Body: Body -->
        <div class="body d-flex pb-3">
            <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="border-0 mb-2">
                        <div
                            class="card-header py-2 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Deleted Users</h3>
                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary btn-set-task w-sm-100">
                                <i class="icofont-arrow-left me-2 fs-6"></i>Back
                            </a>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Manage Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Deleted Users</li>
                    </ol>
                </nav>
                @include('admin.messages')

                <div class="row g-3 mb-3">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header py-2 d-flex justify-content-between border-bottom bg-danger text-white">
                                <h6 class="mb-0 fw-bold">Deleted Users Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="UserDeletedTable" class="table table-hover align-middle mb-0"
                                        style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 3%">#</th>
                                                <th style="width: 10%">Role</th>
                                                <th>Full Name</th>
                                                <th style="width: 15%">Phone</th>
                                                <th style="width: 25%">Email</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled" style="width: 0%">Action
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @if (!empty($user->getRoleNames()))
                                                        @foreach ($user->getRoleNames() as $v)
                                                            <label class="badge alert-success">{{ $v }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td><strong>{{ ucfirst($user->fullname) }}</strong>
                                                </td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td align="center">
                                                    @can('user-restore')
                                                    <a class="btn btn-sm btn-warning"
                                                            href="{{ route('user.restore', $user->id) }}">
                                                            <i data-toggle="tooltip" data-placement="top" title="Restore"
                                                                class="icofont-undo text-white"></i>
                                                        </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endcan
@endsection

@section('footer')
    <script>
        $(document).ready(function() {
            $('#UserDeletedTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                });
        });
    </script>
@endsection
