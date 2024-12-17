@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Add Item</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Items list</li>
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
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search"
                                placeholder="Search...">
                            <i
                                class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="{{ route('items.index') }}" class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-arrow-left"></i> Back to list
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive border rounded p-3 ps-5">
                <!-- create item form -->
                <div class="row">
                    <div class="col-12">

                        <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Product Image:</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Name here" value="{{ old('name') }}">
                                    <label for="name">Name</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <textarea name="description" class="form-control" id="floatingTextarea2" style="height: 100px">{{ old('description') }}</textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="calorie" id="calories"
                                        placeholder="Calories" value="{{ old('calories') }}">
                                    <label for="calories">Calories</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input placeholder="Price" name="price" type="text" class="form-control"
                                    aria-label="Amount (to the nearest dollar)" value="{{ old('price') }}">
                            </div>

                            <!-- Categories -->
                            <div class="mb-3 row pt-3">
                                <label class="col-sm-2 col-form-label">Category:</label>
                                @forelse ($categories->chunk(3) as $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $category)
                                            <div class="col-sm-4">
                                                <div class="form-check py-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        value="{{ $category->id }}" name="categories[]"
                                                        id="categoryCheck{{ $category->id }}"
                                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="categoryCheck{{ $category->id }}">{{ $category->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @empty
                                    <p>No categories available.</p>
                                @endforelse
                            </div>

                            {{-- ingredients  --}}
                            <div class="d-flex flex-column">
                                <button type="button" class="btn btn-primary col-md-3 col-6" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add Ingredients
                                </button>
                            </div>

                            {{-- ingredients MODAL --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Ingredients</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                                @forelse ($ingredients as $ingredient)
                                                    <div
                                                        class="mb-3 d-flex gap-2  align-items-center justify-content-between border-bottom py-2">
                                                        <label for=""
                                                            class="form-label mb-0">{{ $ingredient->name }}</label>
                                                        <input type="number" class="d-block form-control "
                                                            style="width: 16% !important"
                                                            name="ingredients[{{ $ingredient->id }}]">
                                                    </div>

                                                @empty
                                                @endforelse

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"
                                                class="btn bg-danger-subtle text-danger  waves-effect text-start"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button"
                                                class="btn bg-success text-white  waves-effect text-start" data-bs-dismiss="modal">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Products Details -->
                            <div class="mb-3 row pt-3">
                                <label class="col-sm-2 col-form-label">Products Details:</label>
                                @forelse ($details->chunk(3) as $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $detail)
                                            <div class="col-sm-4">
                                                <div class="form-check py-2">
                                                    <input type="checkbox" class="form-check-input" name="details[]"
                                                        value="{{ $detail->id }}" id="detailCheck{{ $detail->id }}"
                                                        {{ in_array($detail->id, old('details', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="detailCheck{{ $detail->id }}">{{ $detail->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @empty
                                    <p>No details available.</p>
                                @endforelse
                            </div>

                            <!-- Products Details -->
                            <div class="mb-3 row pt-3">
                                <label class="col-sm-2 col-form-label">additions:</label>
                                @forelse ($additions->chunk(3) as $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $addition)
                                            <div class="col-sm-4">
                                                <div class="form-check py-2">
                                                    <input type="checkbox" class="form-check-input" name="additions[]"
                                                        value="{{ $addition->id }}"
                                                        id="additionCheck{{ $addition->id }}"
                                                        {{ in_array($addition->id, old('additions', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="additionCheck{{ $addition->id }}">{{ $addition->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @empty
                                    <p>No additions available.</p>
                                @endforelse
                            </div>


                            {{-- ingredients MODAL --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
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