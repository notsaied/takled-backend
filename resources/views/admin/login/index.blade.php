@extends('layouts.master-auth')

@section('title', 'SuperAdmin Login')

@section('pageContent')
  <div id="main-wrapper" class="auth-customizer-none">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                  <img src="{{ URL::asset('build/images/logos/logo.png') }}" class="dark-logo" alt="Logo-Dark" />
                  <img src="{{ URL::asset('build/images/logos/logo.png') }}" class="light-logo" alt="Logo-light" />
                </a>
   
       
                <form action="{{ route('admin.login') }}" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input value="{{ old('username') }}" name="username" type="text" class="form-control" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
             
                  @csrf
                  
                  </div>
                  <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
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