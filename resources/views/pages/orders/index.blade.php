@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Orders list</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Orders list</li>
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

                    <!-- dropdown for filter orders status -->
                    <div class="col-md-8 col-xl-9 mt-3 mt-md-0">
                        <div class="mb-2">Filter by status:</div>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ ucfirst($statuses[request()->get('status', '0')] ?? 'All') }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('orders.index') }}">All</a></li>
                                <li><a class="dropdown-item" href="?status=0">Pending</a></li>
                                <li><a class="dropdown-item" href="?status=1">Preparing</a></li>
                                <li><a class="dropdown-item" href="?status=2">Ready</a></li>
                                <li><a class="dropdown-item" href="?status=3">Delivered</a></li>
                                <li><a class="dropdown-item" href="?status=4">Cancelled</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Table</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Is Paid</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr data-product="{{ $order->item }}" data-info="{{ $order }}"
                                id="ele_{{ $order->id }}" order-details="{{ $order->orderAdditions }}">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $order->item->image }}" class="rounded-circle" alt="modernize-img"
                                            width="56" height="56">
                                        <div class="ms-3">
                                            <h6 class="mb-0 fs-4 product_name">{{ $order->item->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 table_name">{{ $order->table->name }}</p>
                                </td>

                                <td>
                                    <h6 class="mb-0 fs-4 order_price">{{ $order->price }} JOD</h6>
                                </td>

                                <td>
                                    <select data-order-id="{{ $order->id }}" class="form-select status" id="orderStatus"
                                        aria-label="Default select example">
                                        <option value="Pending">Select Status</option>
                                        <option {{ $order->status == 0 ? 'selected' : '' }} value="0">Pending</option>
                                        <option {{ $order->status == 1 ? 'selected' : '' }} value="1">Preparing
                                        </option>
                                        <option {{ $order->status == 2 ? 'selected' : '' }} value="2">Ready</option>
                                        <option {{ $order->status == 3 ? 'selected' : '' }} value="3">Delivered
                                        </option>
                                        <option {{ $order->status == 4 ? 'selected' : '' }} value="4">Cancelled
                                        </option>
                                    </select>
                                </td>

                                <td>
                                    <select data-order-id="{{ $order->id }}" class="form-select status"
                                        id="orderPayment" aria-label="Default select example">
                                        <option {{ $order->is_paid == 0 ? 'selected' : '' }} value="0">Unpaid</option>
                                        <option {{ $order->is_paid == 1 ? 'selected' : '' }} value="1">Paid</option>
                                    </select>
                                </td>

                                <td>
                                    <p class="mb-0 order_date">{{ $order->created_at->format('M d, Y') }}</p>
                                </td>

                                <td>
                                    <!-- Full information Icon -->
                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)"
                                        onclick="openFullOrder({{ $order->id }})" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Full information">
                                        <i class="ti ti-edit"></i>
                                    </a>

                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)"
                                        onclick="remove({{ $order->id }})" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash">
                                        <i class="ti ti-trash"></i>
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

            <div class="d-flex mt-2">
                <div class="mx-auto">
                    {{ $orders->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    </div>
    </div>
    @include('pages.orders.fullOrder')
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

        function openFullOrder(id) {
    // Get the information from data-info of id
    var info = $('#ele_' + id).data('info'),
        product = $('#ele_' + id).data('product');
    var orderDetails = $('#ele_' + id).attr('order-details'); // جلب قيمة السمة 'order-details'
    console.log(info);

    if (!info || !info.order_additions) {
        console.error('No order additions found.');
        return;
    }

    $('#sz_full_order .product_image img').attr('src', product.image);
    $('#sz_full_order .product_name b').text(product.name);
    $('#sz_full_order .product_quantity b').text(info.quantity);

    // Create the header for the order content
    $('#sz_full_order .content').html(`
        <div class="row mb-4">
            <div class="col-4">
                <h6>Products</h6>
            </div>
            <div class="col-4">
                <h6>Quantity</h6>
            </div>
            <div class="col-4">
                <h6>Total</h6>
            </div>
        </div>
    `);

    // Check if there are any additions to display
    if (info.order_additions.length > 0) {
        for (let i = 0; i < info.order_additions.length; i++) {
            $('#sz_full_order .content').append(`
                <div class="row mt-2">
                    <div class="col-4">
                        <img src="${info.order_additions[i].addition.image}" width="50" height="50" class="img-fluid rounded" alt="album">
                        <h6 class="mt-2">${info.order_additions[i].addition.name}</h6>
                    </div>
                    <div class="col-4">
                        <h6>${info.order_additions[i].quantity}</h6>
                    </div>
                    <div class="col-4">
                        <h6>${info.order_additions[i].addition.price * info.order_additions[i].quantity} JOD</h6>
                    </div>
                </div>
            `);
        }
    } else {
        $('#sz_full_order .content').append(`
            <div class="row mt-2">
                <div class="col-12">
                    <h6>No additions available.</h6>
                </div>
            </div>
        `);
    }

    // Set the order ID
    $('#sz_full_order .orderID').text(id);

    // Show the modal with order details
    $('#sz_full_order').modal('show');
}

        $('#orderStatus').on('change', function() {
            // Get the selected value
            let status = $(this).val();
            let orderId = $(this).data('order-id');

            // Send an AJAX request to update the order status
            $.ajax({
                url: '{{ route('orders.setStatus') }}', // Replace with your actual endpoint
                method: 'POST',
                data: {
                    order_id: orderId,
                    status: status
                },
                success: function(response) {
                    // Handle success response
                    toastr.success('Order status updated successfully!');
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    toastr.error('Error updating order status');
                }
            });
        });

        $('#orderPayment').on('change', function() {
            // Get the selected value
            let status = $(this).val();
            let orderId = $(this).data('order-id');

            // Send an AJAX request to update the order status
            $.ajax({
                url: '{{ route('orders.setPaymentStatus') }}', // Replace with your actual endpoint
                method: 'POST',
                data: {
                    order_id: orderId,
                    is_paid: status
                },
                success: function(response) {
                    // Handle success response
                    toastr.success('Order status updated successfully!');
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    toastr.error('Error updating order status');
                }
            });
        });
    </script>
@endsection
