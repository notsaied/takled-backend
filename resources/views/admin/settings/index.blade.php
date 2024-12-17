@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">Account Settings</h4>
            <form id="example-form" method="POST" action="{{ route('admin.settings.update') }}" class="mt-2"
                novalidate="novalidate">
                <div role="application" class="wizard clearfix" id="steps-uid-1">
                    <div class="content clearfix">
                        <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current">Account</h3>
                        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current"
                            aria-hidden="false">
                            @if (session('success'))

                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>

                            @endif

                            @if ($errors->any())

                                <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                </div>

                            @endif

                            <label class="form-label" for="userName">Name</label>
                            <input id="name" value="{{ Auth::user()->name }}" name="name" type="text"
                                class="required form-control mb-3" autocomplete="on" required>

                            <label class="form-label" for="userName">Username</label>
                            <input id="username" value="{{ Auth::user()->username }}" name="username" type="text"
                                class="required form-control mb-3" autocomplete="on" required>

                            <label class="form-label" for="password">Password   <small class="text-danger">*Leave blank to keep the password unchanged*</small></label>
                            <input id="password" name="password" type="password" class="form-control mb-3">


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
