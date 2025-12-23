@extends('layouts.app')

@section('header')
    <style>
        thead input {
            width: 100%;
        }

        .dt-buttons {
            margin-right: 10px;
        }
    </style>
@endsection

@section('content')
        <!-- Body: Body -->
        <div class="body d-flex pb-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="border-0 mb-2">
                        <div
                            class="card-header py-2 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Manage Contacts</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </nav>

                @include('admin.messages')

                <div class="row g-3 mb-3">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div
                                class="card-header py-xl-1 py-2 d-flex align-items-center justify-content-between border-bottom flex-wrap">
                                <h5 class="mb-1 fw-bold">Contact Messages</h5>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="ContactTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="px-1" style="width: 3%">#</th>
                                                <th class="px-1" style="width: 10%">Name</th>
                                                <th class="px-1" style="width: 15%">Phone</th>
                                                <th class="px-1" style="width: 25%">Email</th>
                                                <th class="px-1">Subject</th>
                                                <th class="sorting_asc_disabled sorting_desc_disabled" style="width: 0%">Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ ucfirst($contact->name) }}</td>
                                                    <td>
                                                        {{ $contact->phone ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ $contact->email ?? '' }}
                                                    </td>
                                                    <td>
                                                        {{ Str::limit($contact->subject, 30) ?? '' }}
                                                    </td>
                                                    <td align="center">
                                                        <div class="btn-group" role="group">
                                                            <a class="btn btn-sm btn-secondary ViewContact" href="#"
                                                                data-id="{{ $contact->id }}" title="View Contact">
                                                                <i class="icofont-ui-message text-white"></i>
                                                            </a>
                                                            <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                                method="POST" style="display:contents">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" title="Delete"
                                                                    onclick="return confirm('Are you sure, You want to Delete this?')"
                                                                    class="btn btn-sm btn-danger"
                                                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                                                    <i data-toggle="tooltip" data-placement="top"
                                                                        class="icofont-ui-delete text-white"></i>
                                                                </button>
                                                            </form>
                                                        </div>
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
        <div id="ViewContactModalResult"></div>
@endsection

@section('footer')
    <script>
        $(document).ready(function() {
            $('#ContactTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    lengthMenu: [
                        [15, 30, 50, 100, 150, -1],
                        [15, 30, 50, 100, 150, "All"]
                    ],
                });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $(document).on('click', '.ViewContact', function(e) {
                e.preventDefault();
                var contact_id = parseInt($(this).data('id'));

                $.ajax({
                    type: "GET",
                    url: "{{ url('/contacts') }}/" + contact_id,
                    success: function(response) {
                        //console.log(response);
                        $('#ViewContactModalResult').html(response);
                        $('#ViewContactModal').modal('show');
                    },
                });
            });
        });
    </script>
@endsection
