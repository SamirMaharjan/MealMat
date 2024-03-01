@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            HIM
        @endslot
        @slot('li_2')
            Dashboard
        @endslot
        {{-- @slot('li_3')
            Analytics
        @endslot --}}
        @slot('title')
            Dashboard
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card m-2">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">OnGoing Jobs</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive browser_users">
                        <table id="datatable"class="table mb-0">
                            <thead class="table-light">

                                <tr>
                                    <th class="border-top-0">Posted date</th>
                                    @if ($auth_user->hasRole('SuperAdmin'))
                                        <th class="border-top-0">Company</th>
                                    @endif

                                    <th class="border-top-0">Vacant Position</th>
                                    <th class="border-top-0">Type Of Job</th>
                                    <th class="border-top-0">Need CIM Candidate</th>
                                    <th class="border-top-0">Stages</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Action</th>
                                </tr><!--end tr-->
                            </thead>
                            <tbody>
                                @foreach ($job_list as $item)
                                    <tr data-id="{{ $item->id }}">
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        @if ($auth_user->hasRole('SuperAdmin'))
                                            <td> {{ $item->client->org_name }}</td>
                                        @endif
                                        <td> {{ $item->vacant_position }}</td>
                                        <td> {{ $item->job_type ? 'Full Time' : 'Part Time' }}</td>
                                        <td> Yes</td>
                                        <td>
                                            {{ implode(', ', $item->stages) }}</td>
                                        <td> <span
                                                class="badge badge-soft-{{ $item->status ? 'warning' : 'primary' }}">{{ $item->status ? 'Open' : 'Completed' }}</span>
                                        </td>
                                        <td> <a href="{{ route('jobs-edit', $item->id) }}"
                                                class="btn btn-sm btn-primary text-wgite"><i
                                                    class="fas fa-pencil-alt me-1"></i> Edit</a>
                                            <a class="jobs-delete btn btn-sm btn-danger text-white"><i
                                                    class="far fa-trash-alt me-1"></i>Delete</a>
                                            @if ($item->status)
                                                <a class="jobs-complete btn btn-sm btn-success text-white"><i
                                                        class="fas fa-check me-1"></i>Complete</a>
                                            @endif

                                        </td>
                                    </tr><!--end tr-->
                                @endforeach



                            </tbody>
                        </table> <!--end table-->
                    </div><!--end /div-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
    @if ($auth_user->hasRole('SuperAdmin'))
        
        <div class="row">
        <div class="col-lg-12">
            <div class="card m-2">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Upcoming Client Subscription Expiry</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="">
                        <table class="datatable_class table  table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-top-0">Client Name</th>
                                    <th class="border-top-0">Subscription Package</th>
                                    <th class="border-top-0">Registered Date</th>
                                    <th class="border-top-0">Expiry Date</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Action</th>
                                </tr><!--end tr-->
                            </thead>
                            <tbody>
                                @foreach ($client as $item)
                                    <tr data-id="{{ $item->id }}">
                                        <td>
                                            @if (count($item->images) > 0)
                                                <img src="{{ URL::asset($item->images[0]->path . $item->images[0]->name) }}"
                                                    alt="" height="40" class="me-2">
                                            @endif

                                            {{ $item->org_name }}
                                        </td>
                                        <td> {{ $item->subscription->name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->expires_at }}</td>
                                        <td>
                                            @if ($item->remaining_days > 10)
                                                <span class="badge badge-soft-success">Active({{ $item->remaining_days }}
                                                    days)</span>
                                            @elseif($item->remaining_days > 1)
                                                <span class="badge badge-soft-warning">Expiring
                                                    Soon({{ $item->remaining_days }} days)</span>
                                            @else
                                                <span class="badge badge-soft-danger">Expired({{ $item->remaining_days }}
                                                    days)</span>
                                            @endif



                                        </td>
                                        <td>
                                            <a href="{{ route('client-edit', $item->id) }}"
                                                class="btn btn-sm btn-primary text-white"><i
                                                    class="fas fa-pencil-alt me-1"></i> Edit</a>
                                            <a class="client-delete btn btn-sm btn-danger text-white"><i
                                                    class="far fa-trash-alt me-1"></i>Delete</a>
                                            @if ($item->remaining_days < 30)
                                                <a class="client-renew btn btn-sm btn-success text-white"><i
                                                        class="fas fa-plus me-1"></i> Renew</a>
                                            @endif

                                        </td>

                                    </tr><!--end tr-->
                                @endforeach
                            </tbody>
                        </table> <!--end table-->


                    </div><!--end /div-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
    @endif
@endsection
@section('script')
    <script>
        $('.jobs-delete').click(function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var id = row.data('id');
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",

                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('jobs-delete') }}",
                        type: "POST",
                        data: {

                            id: id,

                        },
                        dataType: "JSON",

                        // data: row.serialize(),
                        success: function(result) {
                            // debugger
                            console.log(result);
                            if (result.status) {
                                swal.fire(
                                    'Deleted!',
                                    result.message,
                                    'success').then(function() {
                                    row.remove();
                                });
                            } else {
                                swal.fire(
                                    'Faulure!',
                                    result.message,
                                    'warning'
                                );
                            }


                        },
                    }).fail((message) => {
                        console.log(typeof message);
                        message = JSON.parse(message.responseText);
                        for (var key in message.errors) {
                            console.log(key + " - " + message.errors[key]);
                            messages.show(message.errors[key], {
                                title: "Error,",
                            });
                        }
                    });


                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        });
        $('.jobs-complete').click(function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var btn = $(this).closest('a');
            var id = row.data('id');
            swal.fire({
                title: 'Are you sure?',
                text: "You want to cmplete this job!",

                showCancelButton: true,
                confirmButtonText: 'Yes, Complete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('jobs-complete') }}",
                        type: "POST",
                        data: {

                            id: id,

                        },
                        dataType: "JSON",

                        // data: row.serialize(),
                        success: function(result) {
                            // debugger
                            console.log(result);
                            if (result.status) {
                                swal.fire(
                                    'Success!',
                                    result.Message,
                                    'success').then(function() {
                                    btn.remove();
                                });
                            } else {
                                swal.fire(
                                    'Faulure!',
                                    result.Message,
                                    'warning'
                                );
                            }


                        },
                    }).fail((message) => {
                        console.log(typeof message);
                        message = JSON.parse(message.responseText);
                        for (var key in message.errors) {
                            console.log(key + " - " + message.errors[key]);
                            messages.show(message.errors[key], {
                                title: "Error,",
                            });
                        }
                    });


                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                        'Cancelled',
                        'Job is still Open :)',
                        'error'
                    )
                }
            })
        });
    </script>
    <script>
        $('.client-delete').click(function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var id = row.data('id');
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",

                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('client-delete') }}",
                        type: "POST",
                        data: {

                            id: id,

                        },
                        dataType: "JSON",

                        // data: row.serialize(),
                        success: function(result) {
                            // debugger
                            console.log(result);
                            if (result.status) {
                                swal.fire(
                                    'Deleted!',
                                    result.Message,
                                    'success').then(function() {
                                    row.remove();
                                });
                            } else {
                                swal.fire(
                                    'Faulure!',
                                    result.message,
                                    'warning'
                                );
                            }


                        },
                    }).fail((message) => {
                        console.log(typeof message);
                        message = JSON.parse(message.responseText);
                        for (var key in message.errors) {
                            console.log(key + " - " + message.errors[key]);
                            messages.show(message.errors[key], {
                                title: "Error,",
                            });
                        }
                    });


                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        });
        $('.client-renew').click(function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var id = row.data('id');
            swal.fire({
                title: 'Are you sure?',
                text: "Do yo want to renew this client!",

                showCancelButton: true,
                confirmButtonText: 'Yes, Renew it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('client-renew') }}",
                        type: "POST",
                        data: {

                            id: id,

                        },
                        dataType: "JSON",

                        // data: row.serialize(),
                        success: function(result) {
                            // debugger
                            console.log(result);
                            if (result.status) {
                                swal.fire(
                                    'Renew Success!',
                                    result.Message,
                                    'success').then(function() {
                                    $(this).remove();
                                });
                            } else {
                                swal.fire(
                                    'Faulure!',
                                    result.message,
                                    'warning'
                                );
                            }


                        },
                    }).fail((message) => {
                        console.log(typeof message);
                        message = JSON.parse(message.responseText);
                        for (var key in message.errors) {
                            console.log(key + " - " + message.errors[key]);
                            messages.show(message.errors[key], {
                                title: "Error,",
                            });
                        }
                    });


                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        });
    </script>
@endsection
