@extends('layouts.master-auth')

@section('title', 'Modernize Bootstrap Admin')

@section('pageContent')
    <div id="main-wrapper" class="auth-customizer-none">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                        <div class="card mb-0">
                            <div class="card-body pt-5">
                                <a href="/main/index" class="text-nowrap logo-img text-center d-block mb-4 w-100">
                                    <img src="{{ URL::asset('build/images/logos/dark-logo.svg') }}" class="dark-logo"
                                        alt="Logo-Dark" />
                                    <img src="{{ URL::asset('build/images/logos/light-logo.svg') }}" class="light-logo"
                                        alt="Logo-light" />
                                </a>
                                <div class="mb-5 text-center">
                                    <p class="mb-0 ">
                                        The OTP has been sent to your registered mobile number. Please enter it in the input field to reset your password.
                                    </p>
                                </div>
                                <form action="{{route("verify.otp")}}" method="post">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>


                                    @endif
                                    @csrf
                                    <div class="mb-3 border-bottom py-3">
                                        <label for="otp" class="form-label">Enter OTP</label>
                                        <input type="text" class="form-control" id="otp" name="otp">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">New Password</label>
                                        <input id="password" name="password" type="password" class="required form-control mb-3" autocomplete="off">
                                    </div>


                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                                    </div>
                                    <input type="hidden" name="hash" value="{{ $hash }}">

                                 

                                    <button class="btn btn-primary w-100 py-8 mb-3">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
