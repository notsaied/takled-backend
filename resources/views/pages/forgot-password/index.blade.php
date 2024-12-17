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
                                        Please enter the registered phone number associated with your account, and we will
                                        send you an OTP to reset your password.
                                    </p>
                                </div>
                                <form action="{{route("send.otp")}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 mb-3">Send OTP</button>
                                    <a href="{{route("login")}}"
                                        class="btn bg-primary-subtle text-primary w-100 py-8">Back to
                                        Login</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
