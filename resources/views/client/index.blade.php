@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
    
@endsection
@section('create_button')
    <li class="creat-btn">
        <div class="nav-link">
            <a class=" btn btn-sm btn-soft-primary" href="{{ route('client-add') }}" role="button"><i
                    class="fas fa-plus me-2"></i>New Client</a>
        </div>
    </li>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            HIM
        @endslot
        @slot('li_2')
            Client Management
        @endslot
        @slot('li_3')
            Show All Clients
        @endslot
        @slot('title')
            Client Management
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card m-2">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">List Of Clients</h4>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">

                            {{-- <a class=" btn btn-sm btn-soft-primary" href="{{ route('client-add') }}" role="button"><i
                                    class="fas fa-plus me-2"></i>New Client</a> --}}
                        </div>
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
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
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $item->expires_at->format('d-m-Y')}}</td>

                                        
                                        <td>
                                            @if ($item->remaining_days>30)
                                            <span class="badge badge-soft-success">Active({{ $item->remaining_days }} days)</span>
                                            @elseif($item->remaining_days>1)
                                            <span class="badge badge-soft-warning">Expiring Soon({{ $item->remaining_days }} days)</span>
                                            @else
                                            <span class="badge badge-soft-danger">Expired({{ $item->remaining_days }} days)</span>
                                            
                                            @endif
                                            
                                            
                                        
                                        </td>
                                        <td>
                                             <a href="{{ route('client-edit',base64_encode( $item->id)) }}"
                                                class="btn btn-sm btn-primary text-white"><i
                                                    class="fas fa-pencil-alt me-1"></i> Edit</a>
                                            <a class="client-delete btn btn-sm btn-danger text-white"><i
                                                    class="far fa-trash-alt me-1"></i>Delete</a>
                                                    @if ($item->remaining_days<30)
                                                    <a 
                                                        class="client-renew btn btn-sm btn-success text-white"><i
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
@endsection
@section('script')
  

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
