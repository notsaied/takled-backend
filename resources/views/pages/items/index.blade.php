@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Items list</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Shop list</li>
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
                        <a href="{{ route('items.create') }}" class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> Add Item
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Date</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr data-info="{{ $item }}" id="ele_{{ $item->id }}">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $item->image }}" class="rounded-circle" alt="modernize-img"
                                            width="56" height="56">
                                        <div class="ms-3">
                                            <h6 class="mb-0 fs-4">{{ $item->name }}</h6>
                                            <p class="mb-0">
                                                {{ implode(', ', $item->categories->pluck('name')->toArray()) ?? '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $item->created_at->format('M d, Y') }}</p>
                                </td>
                                <td>
                                    <h6 class="mb-0 fs-4">{{ $item->price }} JOD</h6>
                                </td>
                                <td>
                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)"
                                        onclick="remove({{ $item->id }})" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash">
                                        <i class="ti ti-trash"></i>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2" href="{{ route('items.edit', $item->id) }}"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                        <i class="ti ti-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    Nothing to show
                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    </div>
    @include('pages.components.large_model', ['title' => 'Add Item'])
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function remove(id) {
            Swal.fire({
                title: 'Are you sure ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((result) => {
                if (result['isConfirmed']) {
                    $.ajax({
                        method: 'POST',
                        url: '{{ route('items.delete') }}',
                        data: {
                            id: id
                        },
                        success: () => {
                            $('#ele_' + id).remove();
                        },
                        error: () => {
                            toastr.error('Error submitting the form. Please try again.');
                        }
                    });
                }
            })
        }
    </script>
@endsection
