@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">Settings</h4>
            <h6 class="card-subtitle"></h6>
            <form id="example-form" method="POST" action="{{ route('settings.update') }}" class=""
                novalidate="novalidate" enctype="multipart/form-data">
                <div role="application" class="wizard clearfix" id="steps-uid-1">
                    <div class="content clearfix">
                        <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current"></h3>
                        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current"
                            aria-hidden="false">

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach

                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                                

                            @endif
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input id="name" value="{{ Auth::user()->name }}" name="name" type="text"
                                    class="required form-control mb-3" autocomplete="on">
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="userName">Username</label>
                                <input id="userName" value="{{ Auth::user()->username }}" name="username" type="text"
                                    class="required form-control mb-3" autocomplete="on">
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="facebook">Facebook</label>
                                <input id="facebook" value="{{ Auth::user()->facebook }}" name="facebook" type="text"
                                    class=" form-control mb-3" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="x">X</label>
                                <input id="x" value="{{ Auth::user()->x }}" name="x" type="text"
                                    class=" form-control mb-3" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="snapchat">Snapchat</label>
                                <input id="snapchat" value="{{ Auth::user()->snapchat }}" name="snapchat" type="text"
                                    class=" form-control mb-3" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="tiktok">Tiktok</label>
                                <input id="tiktok" value="{{ Auth::user()->tiktok }}" name="tiktok" type="text"
                                    class=" form-control mb-3" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="instagram">Instagram</label>
                                <input id="instagram" value="{{ Auth::user()->instagram }}" name="instagram" type="text"
                                    class=" form-control mb-3" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="mobile_phone">Mobile Phone</label>
                                <input id="mobile_phone" value="{{ Auth::user()->mobile_phone }}" name="mobile_phone" type="text"
                                    class=" form-control mb-3" >
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="cover">Cover</label>
                                <input id="cover"  name="cover" type="file"
                                    class=" form-control mb-3" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input id="image"  name="image" type="file"
                                    class=" form-control mb-3" >
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
