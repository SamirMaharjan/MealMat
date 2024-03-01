@extends('layouts.master-without_nav')

@section('title') Reset Password @endsection

@section('content')
<body class="account-body accountbg">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Reset Password For Dastone</h4>
                                        <p class="text-muted  mb-0">Enter your Email and instructions will be sent to you!</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal  auth-form" method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" value="{{ old('email') }}" name="email" placeholder="Enter email" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password" placeholder="Enter password" autofocus>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label" for="conf_password">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword" name="password_confirmation" placeholder="Enter Confirm password" autofocus>
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div>
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <p class="text-muted mb-0 mt-3">Remember It ?  <a href="{{ url('login') }}" class="text-primary ms-2">Sign in here</a></p>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

