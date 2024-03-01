<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> Career In Motions | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Career In Motions" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/brand-logo/logo.jpg') }}" type="image/x-icon">
    @include('layouts.head-css')
</head>

<body>
  

    @if ($auth_user->hasRole('SuperAdmin'))
        @include('layouts.sidebar')
    @elseif ($auth_user->hasRole('ClientAdmin'))
        @include('layouts.client_sidebar')
    @elseif ($auth_user->hasRole('HIMSubUser'))
        @include('layouts.admin_user_sidebar')
    @elseif ($auth_user->hasRole('StageUser'))
        @include('layouts.stage_user_sidebar')
    @endif
    <div class="toast bg-danger d-none" id="toast-content" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-danger ">
           <h5 class="text-light">  </h5>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div><!--end toast-->
    <div class="page-wrapper">
        @include('layouts.topbar')

        <div class="page-content">
            <div class="container-fluid">
                @if (Session::has('success'))
                    <div aria-live="polite" aria-atomic="true" class="position-relative bd-example-toasts">
                        <div class="toast-container position-absolute p-3 border-0 top-50 end-0 translate-middle-y"
                            id="">
                            <div class="toast d-flex align-items-center text-white bg-primary border-0" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-body">
                                    {{ Session::get('success') }}
                                </div>
                                <button type="button" class="btn-close btn-close-white ms-auto me-2"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div><!--end toast-->
                @endif
                @if (Session::has('warning'))
                    <div aria-live="polite" aria-atomic="true" class="position-relative bd-example-toasts warning-toast">
                        <div class="toast-container position-absolute p-3 border-0 top-50 end-0 translate-middle-y"
                            id="">
                            <div class="toast d-flex align-items-center text-white bg-danger border-0" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-body">
                                    {{ Session::get('warning') }}
                                </div>
                                <button type="button" class="btn-close btn-close-white ms-auto me-2"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div><!--end toast-->
                @endif
                <div aria-live="polite" id="warning-toast" aria-atomic="true" class="bd-example-toasts " >
                    <div class="toast-container position-fixed p-3 top-0 end-0" style="z-index: 100;">
                      
                        
                    </div>
                </div>
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
        
            
       
    </div>
    @include('layouts.vendor-scripts')

    <script>
        $('.notification_link').click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var href = $(this).attr('href');
        
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('read_notification') }}",
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
                                'Readed',
                                result.message,
                                'success').then(function() {
                                row.remove();
                            });
                            window.location.href = href;
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


            
        
    });
    </script>
    <script>
        // Initialize Bootstrap tooltips
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
      </script>
</body>

</html>
