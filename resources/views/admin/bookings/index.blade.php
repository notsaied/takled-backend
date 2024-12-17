@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Bookings</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Bookings</li>
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



            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Barber Name</th>
                            <th scope="col">Service</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                            <tr data-info="{{ $booking }}" id="ele_{{ $booking->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $booking->barber->name }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $booking->service->name }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $booking->name }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $booking->phone }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <select name="status" id="" class="form-select"
                                                onchange="updateStatus(this, {{ $booking->id }})">
                                                <option @if ($booking->status == 0) selected @endif value="0">
                                                    Pending</option>
                                                <option @if ($booking->status == 1) selected @endif value="1">
                                                    Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $booking->booking_date }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex ">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $booking->booking_time }}</h6>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    {{-- <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"
                                        onclick="remove({{ $booking->id }});">
                                        <i class="ti ti-trash"></i>
                                    </a> --}}

                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Show" onclick="showModal({{ json_encode($booking) }})">
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
                    {{ $bookings->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="new-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Booking Details</h1>
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
            return `
                    <div class="mb-3">
                        <h4>Braber Name :</h4>
                        <p>${data.barber.name}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Service Name :</h4>
                        <p>${data.service.name}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Service Price :</h4>
                        <p>${data.service.price}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Name :</h4>
                        <p>${data.name}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Phone :</h4>
                        <p>${data.phone}</p>
                    </div>
                     <div class="mb-3">
                        <h4>Booking Date :</h4>
                        <p>${data.booking_date}</p>
                    </div>
                     <div class="mb-3">
                        <h4>Time Date :</h4>
                        <p>${data.booking_time}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Message :</h4>
                        <p>${data.message}</p>
                    </div>
                    <div class="mb-3">
                        <h4>Status :</h4>
                        <p class="text-${data.status == 0 ? 'danger' : 'success'}">${data.status == 0 ? 'Pending' : 'Completed'}</p>
                    </div>`
        }



        function updateStatus(selectElement, bookingId) {
            var status = selectElement.value;

            $.ajax({
                url: '{{ route('admin.bookings.update') }}',
                type: 'POST',
                data: {
                    status: status,
                    booking_id: bookingId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        title: "Success",
                        text: "Status updated successfully",
                        icon: "success"
                    });
                },
                error: function(xhr, status, error) {
                    alert('حدث خطأ: ' + error);
                }
            });
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
