@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Barbers list</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Barbers list</li>
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
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>

                    @endif
                </div>
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" name="q" id="input-search"
                                placeholder="Search ..." value="{{ request('q') }}">
                            <i
                                class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="{{route('admin.barbers.create')}}"  id="btn-add-item"
                            class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> Add
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Telegram ID</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($barbers as $barber)
                            <tr data-info="{{ $barber }}" id="ele_{{ $barber->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $barber->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $barber->telegram_id }}</h6>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"
                                        onclick="remove({{ $barber->id }});">
                                        <i class="ti ti-trash"></i>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2" href="{{ route('admin.barbers.edit', $barber->id) }}" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Edit"
                                        onclick="">
                                        <i class="ti ti-pencil"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr id="empty">

                                <td colspan="4">
                                    Nothing to show
                                </td>

                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <div class="d-flex mt-2">
                <div class="mx-auto">
                    {{ $barbers->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="new-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Barber</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function showModal(type, data) {
            $('#new-modal .modal-body').html('');
            $('#new-modal .modal-body').html(modalContent(type, data));
            $('#new-modal').modal('show');
        }

        function modalContent(type, data) {
            console.log(data);

            let method = 'post';
            let url = '';

            if (type === 'add') {
                url = "{{ route('admin.barbers.store') }}";
            } else if (type === 'edit') {
                // Ensure the URL is correct by combining the route and data.id properly
                url = `{{ route('admin.barbers.update', '') }}/${data.id}`;
            }

            return `
        <form action="${url}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="${data.name || ''}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
                        <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    `;
        }








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
                        url: `{{ route('admin.barbers.delete', '') }}/${id}`,
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
