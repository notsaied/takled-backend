@extends('layouts.master-auth')

@section('title', 'Login')

@section('pageContent')
    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="/main/index" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img style="width: 80px; height: 80px;" src="{{ URL::asset('build/images/logos/logo.png') }}"
                                class="dark-logo" alt="Logo-Dark" />
                            <img style="width: 80px; height: 80px;" src="{{ URL::asset('build/images/logos/logo.png') }}"
                                class="light-logo" alt="Logo-light" />
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center h-n80">
                            <img src="{{ URL::asset('build/images/backgrounds/login-security.svg') }}" alt="modernize-img"
                                class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="auth-max-width col-sm-8 col-md-6 col-xl-7 px-4">
                                <h2 class="mb-1 fs-7 fw-bolder">Welcome</h2>
                                <p class="mb-7">Your Admin Dashboard</p>
                                <form action="{{ route('login.post') }}" method="POST">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="usernameInput" class="form-label">Username</label>
                                        <input value="{{ old('username') }}" name="username" type="text"
                                            class="form-control" id="usernameInput" aria-describedby="emailHelp"
                                            value="stars">
                                    </div>
                                    <div class="mb-4">
                                        <label for="passwordInput" class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control" id="passwordInput">
                                    </div>
                                    @csrf
                                    <div class="d-flex align-items-center justify-content-between mb-4">

                                        <a class="text-primary fw-medium fs-3"
                                            href="{{ route('forgot-password') }}">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        @if (session('error'))
            toastr.error('{{ session('error') }}', 'Error');
        @endif
    </script>
@endsection
