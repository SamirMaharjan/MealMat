<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title> Career In Motions | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Career In Motions" name="description" />
    <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/brand-logo/logo.jpg') }}">

        @include('layouts.head-css')
    </head>

    <body data-layout="horizontal" data-sidebar="dark">
        @include('layouts.horizontal')
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
            @include('layouts.vendor-scripts')
    </body>
</html>