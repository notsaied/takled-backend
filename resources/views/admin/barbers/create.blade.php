@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Add Barber</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Add Barber</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('build/images/breadcrumb/ChatBc.png') }}" alt="modernize-img"
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-list">
        <div class="card">

            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-xl-3">

                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="{{ route('admin.barbers.index') }}" class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-arrow-left"></i> Back to list
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive border rounded p-3 ps-5">
                <!-- create item form -->
                <div class="row">
                    <div class="col-12">

                        <form action="{{ route('admin.barbers.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                            </div>
                            <div class="mb-3">
                                <label for="telegram_id" class="form-label">Telegram ID</label>
                                <input type="text" class="form-control" id="telegram_id" name="telegram_id" value="{{old('telegram_id')}}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>



                            <!-- Services  -->
                            <div class="mb-3 row pt-3">
                                <label class="col-sm-2 col-form-label">Services </label>
                                @forelse ($services->chunk(3) as $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $service)
                                            <div class="col-sm-4">
                                                <div class="form-check py-2">
                                                    <input type="checkbox" class="form-check-input" name="services[]"
                                                        value="{{ $service->id }}" id="serviceCheck{{ $service->id }}"
                                                        {{ in_array($service->id, old('services', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="serviceCheck{{ $service->id }}">{{ $service->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @empty
                                    <p>No Services available.</p>
                                @endforelse
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    @include('pages.components.large_model', ['title' => 'Add Item'])
@endsection

@section('scripts')
    <script>
        //if there are laravel error make toaster
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif

        //if there are success alert
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
@endsection
