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
    @can('user-read')
        <!-- Body: Body -->
        <div class="body d-flex pb-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="border-0 mb-2">
                        <div
                            class="card-header py-2 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Manage Users</h3>
                            <a class="btn btn-sm btn-primary btn-set-task w-sm-100" href="{{ route('users.create') }}">
                                <i class="icofont-plus-circle me-2 fs-6"></i> Add User
                            </a>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>

                @include('admin.messages')

                <div class="row g-3 mb-3">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div
                                class="card-header py-xl-1 py-2 d-flex align-items-center justify-content-between border-bottom flex-wrap">
                                <h5 class="mb-1 fw-bold">User Information</h5>

                                <div align="right"
                                    class="w-sm-100 d-flex align-items-center justify-content-between flex-wrap">

                                    <a href="#" id="resetUserDataTable" title="Reset User List"
                                        class="btn btn-sm btn-secondary btn-set-task w-sm-100 my-1 ms-lg-1 me-xl-0 ms-1">
                                        <i class="icofont-refresh text-white"></i>
                                    </a>

                                    @can('user-trash')
                                        <a class="btn btn-sm btn-danger text-white btn-set-task w-sm-100 my-1 ms-lg-1 me-xl-0 ms-1"
                                            href="{{ route('user.trash') }}">
                                            <i class="icofont-trash me-1 fs-6"></i> Recycle Bin
                                        </a>
                                    @endcan

                                    {{-- <div class="dropdown btn-set-task w-sm-100 my-1 ms-lg-1 me-xl-0 ms-1">
                                        <button class="btn btn-sm btn-dark dropdown-toggle btn-set-task w-sm-100 text-white m-0"
                                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Export
                                        </button>

                                        <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton1">
                                            <li id="excelButton">
                                                <a href="#" class="dropdown-item text-black">
                                                    <i class="icofont-file-spreadsheet me-1"></i>Excel
                                                </a>
                                            </li>
                                            <li id="pdfButton">
                                                <a href="#" class="dropdown-item text-black">
                                                    <i class="icofont-file-pdf me-1"></i>PDF
                                                </a>
                                            </li>
                                            <li id="printButton">
                                                <a href="#" class="dropdown-item text-black">
                                                    <i class="icofont-print me-1"></i>Print
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="UserTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="px-1" style="width: 3%">#</th>
                                                <th class="px-1" style="width: 10%">Role</th>
                                                <th class="px-1">Full Name</th>
                                                <th class="px-1" style="width: 15%">Phone</th>
                                                <th class="px-1" style="width: 25%">Email</th>
                                                @can('user-update')
                                                    <th class="sorting_asc_disabled sorting_desc_disabled" style="width: 0%">Status
                                                    </th>
                                                @endcan
                                                <th class="sorting_asc_disabled sorting_desc_disabled" style="width: 0%">Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $user)
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
                                                    @can('user-update')
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" id="list-group2"
                                                                    data-id="{{ $user->id }}" title="Change Status"
                                                                    class="form-check-input"
                                                                    {{ $user->status == 1 ? 'checked' : '' }}>
                                                            </div>
                                                        </td>
                                                    @endcan
                                                    <td align="center">
                                                        {{-- @can('user-read')
                                                            <a href="{{ route('users.show', $user->id) }}"
                                                                class="btn btn-outline-secondary" title="Show">
                                                                <i class="icofont-eye-alt text-primary"></i></a>
                                                        @endcan --}}
                                                        <a href="#" class="btn btn-sm btn-outline-secondary px-3 pt-2"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v fs-5"></i></a>
                                                        <ul class="dropdown-menu shadow">
                                                            @can('user-read')
                                                                <li>
                                                                    <a href="{{ route('users.show', $user->id) }}"
                                                                        class="dropdown-item text-dark" title="Show">
                                                                        View
                                                                    </a>
                                                                </li>
                                                            @endcan
                                                            @can('user-update')
                                                                <li>
                                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                                        class="dropdown-item text-black" title="Edit">
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('user.chpwd', $user->id) }}"
                                                                        class="dropdown-item" style="color:darkorange"
                                                                        title="Change Password">
                                                                        Change Password
                                                                    </a>
                                                                </li>
                                                            @endcan
                                                            @can('user-delete')
                                                                <hr class="dropdown-divider border-dark m-0">
                                                                <li>
                                                                    <form id="delete-form-{{ $user->id }}" method="post"
                                                                        action="{{ route('users.destroy', $user->id) }}"
                                                                        style="display: none">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('DELETE') }}
                                                                    </form>
                                                                    <a href="" class="dropdown-item text-danger"
                                                                        title="Delete"
                                                                        onclick="
                                                                    if(confirm('Are you sure, You Want to delete this?')) {
                                                                        event.preventDefault();
                                                                        document.getElementById('delete-form-{{ $user->id }}').submit();
                                                                    }
                                                                    else{
                                                                    event.preventDefault();
                                                                    }">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            @endcan
                                                        </ul>
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
            $("#resetUserDataTable").click(function() {
                localStorage.removeItem('DataTables_UserTable_' + window.location.pathname);
                location.reload();
            });
        });

        $(document).ready(function() {
            $('.form-check-input').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeUserStatus',
                    data: {
                        "user_id": user_id,
                        "status": status,
                    },
                    success: function(data) {
                        // console.log(data.success);
                        // alert(data.success);
                        toastr.success(data.success, 'Success');
                    }
                });
            });
        });
    </script>

    {{-- <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"  rel="stylesheet" type="text/css" /> --}}
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.datatables.net/fixedheader/3.3.2/css/fixedHeader.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/colreorder/1.6.2/css/colReorder.dataTables.min.css" rel="stylesheet"
        type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js" lang="Javascript" type="text/javascript"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" lang="Javascript" type="text/javascript">
    </script>

    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" lang="Javascript"
        type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js" lang="Javascript"
        type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" lang="Javascript" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" lang="Javascript"
        type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" lang="Javascript"
        type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js" lang="Javascript" type="text/javascript">
    </script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js" lang="Javascript" type="text/javascript">
    </script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js" lang="Javascript"
        type="text/javascript"></script>

    <script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js" lang="Javascript"
        type="text/javascript"></script>
    <script src="https://cdn.datatables.net/colreorder/1.6.2/js/dataTables.colReorder.min.js" lang="Javascript"
        type="text/javascript"></script>

    <script>
        // Get Current Date
        let today = new Date();
        var now = moment(today).format('YYYYMMDD_HHMM');
        const filename = "Users_" + now;

        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#UserTable thead tr')
                .clone(true)
                .addClass('filters')
                .addClass('nowrap')
                .appendTo('#UserTable thead');

            $('#UserTable').dataTable({
                responsive: true,
                stateSave: true,
                lengthMenu: [
                    [15, 30, 50, 100, 150, -1, ],
                    [15, 30, 50, 100, 150, "All"]
                ],

                // order: [
                //     [0, "desc"]
                // ],

                // scrollY: true,

                // scrollY: "400px",
                // scrollCollapse: true,

                // paging: false,
                // lengthChange: false,
                dom: 'Blfrtip', // '<"dt-buttons"Bf><"clear">lirtp',
                buttons: [{
                        extend: 'colvis',
                        collectionLayout: 'columns',
                        collectionTitle: 'Column Visibility Control',
                        columnText: function(dt, idx, title) {
                            return (idx + 1) + ': ' + title;
                        },
                    }, {
                        extend: 'excelHtml5',
                        title: `Users`,
                        filename: `${filename}`,
                        autoFilter: true,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        title: `Users`,
                        filename: `${filename}`,
                        orientation: 'portrait', // landscape
                        pageSize: 'A4',
                        download: 'open',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                ],

                columnDefs: [{
                    orderable: false,
                    targets: -1
                }],
                orderCellsTop: true,
                fixedHeader: true,
                initComplete: function() {
                    var api = this.api();

                    // For each column
                    api.columns().eq(0).each(function(colIdx) {
                        if (colIdx != 5 && colIdx != 6) {
                            // Set the header cell to contain the input element
                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            var title = $(cell).text();
                            $(cell).html('<input type="text" placeholder="' + title + '" />');

                            // On every keypress in this input
                            $('input', $('.filters th').eq($(api.column(colIdx).header())
                                    .index()))
                                .off('keyup change')
                                .on('change', function(e) {
                                    // Get the search value
                                    $(this).attr('title', $(this).val());
                                    var regexr =
                                        '({search})'; //$(this).parents('th').find('select').val();

                                    var cursorPosition = this.selectionStart;
                                    // Search the column for that value
                                    api
                                        .column(colIdx)
                                        .search(
                                            this.value != '' ?
                                            regexr.replace('{search}', '(((' + this.value +
                                                ')))') : '',
                                            this.value != '',
                                            this.value == ''
                                        )
                                        .draw();
                                })
                                .on('keyup', function(e) {
                                    e.stopPropagation();

                                    $(this).trigger('change');
                                    $(this).focus()[0].setSelectionRange(cursorPosition,
                                        cursorPosition);
                                });
                        } else {
                            var c = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            $(c).html("");
                        }
                    });
                }
            });
        });

        // $("ul.dropdown-menu li").click(function() {
        //     var i = $(this).index() + 1;
        //     var table = $('#UserTable').DataTable();
        //     if (i == 1) {
        //         table.button('.buttons-excel').trigger();
        //     } else if (i == 2) {
        //         table.button('.buttons-pdf').trigger();
        //     } else if (i == 3) {
        //         table.button('.buttons-print').trigger();
        //     }
        // });
    </script>
@endsection
