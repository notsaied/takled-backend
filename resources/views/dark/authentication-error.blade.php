@extends('layouts.master-auth')

@section('title', 'Modernize Bootstrap Admin')

@section('pageContent')
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-lg-4">
            <div class="text-center">
              <img src="{{ URL::asset('build/images/backgrounds/errorimg.svg') }}" alt="modernize-img" class="img-fluid"
                width="500">
              <h1 class="fw-semibold mb-7 fs-9">Opps!!!</h1>
              <h4 class="fw-semibold mb-7">This page you are looking for could not be found.</h4>
              <a class="btn btn-primary" href="/dark/index" role="button">Go Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection