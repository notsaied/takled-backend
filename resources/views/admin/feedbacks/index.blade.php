@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Feedbacks</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Feedbacks</li>
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

                    </div>
                </div>
            </div>

            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks as $feedback)
                            <tr data-info="{{ $feedback }}" id="ele_{{ $feedback->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 id="name" class="mb-0 fs-4">{{ $feedback->name }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 id="name" class="mb-0 fs-4">{{ $feedback->email }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 id="name" class="mb-0 fs-4">{{ $feedback->phone }}</h6>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"
                                        onclick="remove({{ $feedback->id }});">
                                        <i class="ti ti-trash"></i>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"
                                        onclick="showModal({{ json_encode($feedback) }})">
                                        <i class="fa fa-eye"></i>
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
                    {{ $feedbacks->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="new-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Feedback</h1>
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


        function showModal(data) {
            console.log(data);

            $('#new-modal').modal('show');

            $('#new-modal .modal-body').html(feedbackHtml(data));

        }

        function feedbackHtml(data) {
            return `  <div class="mb-3">
                        <h4>Name :</h4>
                        <p>${data.name}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Phone :</h4>
                        <p>${data.phone}</p>
                    </div>
                    <div class="mb-3 ">
                        <h4>Email :</h4>
                        <p>${data.email}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Message :</h4>
                        <p>${data.message}</p>
                    </div>`
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
                        url: `{{ route('admin.feedbacks.delete', '') }}/${id}`,
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
