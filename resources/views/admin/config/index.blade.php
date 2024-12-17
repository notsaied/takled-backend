@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">Configuration</h4>
            <h6 class="card-subtitle mb-3"></h6>
            <form id="example-form" method="POST" action="{{ route('admin.configs.update') }}" class="mt-5"
                novalidate="novalidate">
                <div role="application" class="wizard clearfix" id="steps-uid-1">
                    <div class="content clearfix">
                        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current"
                            aria-hidden="false">


                            <div class="mb-3">
                                <label for="name" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Facebook here"
                                    value="{{ $config->facebook ?? "" }}" name="facebook">
                            </div>


                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Email here"
                                    value="{{ $config->email ?? "" }}" name="email">
                            </div>


                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" placeholder="Enter Phone Number here"
                                    value="{{ $config->phone_number ?? "" }}" name="phone_number">
                            </div>


                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="instagram" placeholder="Enter Instagram here"
                                    value="{{ $config->instagram ?? "" }}" name="instagram">
                            </div>



                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address here"
                                    value="{{ $config->address ?? "" }}" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="hours" class="form-label">Hours</label>
                                <input type="text" class="form-control" id="hours" placeholder="Enter Hours here"
                                    value="{{ $config->hours ?? "" }}" name="hours">
                            </div>


                        </section>
                        @csrf
                    </div>
                    <div class="actions clearfix">
                        <ul role="menu" aria-label="Pagination">
                            <li aria-hidden="false" aria-disabled="false"><button type="submit"
                                    class="btn btn-primary">Save</button></li>
                            <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
                        </ul>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
