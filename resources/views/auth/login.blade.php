@extends('layouts.master-without_nav')

@section('title')
    Login
@endsection

@section('content')

    <body class="account-body accountbg">


        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card" style="border:none;">
                                <div class="text-center">


                                </div>

                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (session('warning'))
                                    <div class="alert alert-danger center">
                                        {{ session('warning') }}
                                    </div>
                                @endif

                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="index" class="logo logo-admin">

                                            <img src="{{ URL::asset('assets/images/CIM_Logo.svg') }}" height="120"
                                                alt="logo" class="auth-logo">

                                        </a>

                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="row ">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header m-2">
                                                        <h4 class="card-title">Login</h4>
                                                        <p class="text-muted mb-0">Fill The Form below to Login
                                                        </p>
                                                    </div><!--end card-header-->
                                                    <div class="card-body bootstrap-select-1">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group mx-2 my-4">
                                                                    <label class="form-label "
                                                                        for="username">Username</label>
                                                                    <div class="input-group">
                                                                        <input name="email" type="email"
                                                                            class="form-control @error('email') is-invalid @enderror"
                                                                            value="{{ old('email') }}" id="username"
                                                                            placeholder="Enter Email" autocomplete="email"
                                                                            autofocus>
                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mx-2 my-4">
                                                                    <label class="form-label"
                                                                        for="userpassword">Password</label>
                                                                    <div class="input-group">
                                                                        <input type="password" name="password"
                                                                            class="form-control  @error('password') is-invalid @enderror"
                                                                            id="userpassword" placeholder="Enter password"
                                                                            aria-label="Password"
                                                                            aria-describedby="password-addon">
                                                                        @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div><!-- end col -->

                                                        </div><!-- end row -->
                                                        <div class="row align-items-center">
                                                            <div class="col m-2 ">
                                                                <button class="btn btn-primary text-white mb-4 px-4"
                                                                    type="submit">Sign In</button>
                                                            </div><!--end col-->
                                                            <div class="col-auto align-self-center  m-2">

                                                                <a class=" btn text-black mb-4 px-4" href="#"
                                                                    role="button">Forgot Password?</a>
                                                            </div>
                                                        </div>

                                                    </div><!-- end card-body -->

                                                </div> <!-- end card -->
                                            </div> <!-- end col -->

                                        </div>

                                    </form>
                                </div>

                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">
                                        &copy; 2023 Careers In Motions


                                        {{-- Mannatthemes ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
