@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">Change Password</h4>
            <h6 class="card-subtitle"></h6>


            <form id="example-form" method="POST" action="{{ route('settings.changePasswordUpdate') }}" class="" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <div role="application" class="wizard clearfix" id="steps-uid-1">
                    <div class="content clearfix">
                        <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current"></h3>
                        <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">
                            {{-- عرض رسالة النجاح --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- عرض رسالة الخطأ الخاصة بكلمة المرور الحالية --}}
                            @error('current')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="current">Current Password</label>
                                <input id="current" name="current" type="password" class="required form-control mb-3" autocomplete="off">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">New Password</label>
                                <input id="password" name="password" type="password" class="required form-control mb-3" autocomplete="off">
                            </div>
                            @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>
                            @error('password_confirmation')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </section>
                    </div>
                    <div class="actions clearfix">
                        <ul role="menu" aria-label="Pagination">
                            <li aria-hidden="false" aria-disabled="false"><button type="submit" class="btn btn-primary">Save</button></li>
                        </ul>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
