@extends('layouts.master')

@section('title', 'Coupons')

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Coupons list</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Coupons list</li>
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
                            <input type="text" class="form-control product-search ps-5" name="q" id="input-search"
                                placeholder="Search ..." value="{{ request('q') }}">
                            <i
                                class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="javascript:void(0)" onclick="add();" id="btn-add-item"
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
                            <th scope="col">Code</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($coupons as $coupon)
                            <tr id="ele_{{ $coupon->id }}">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 id="name" class="mb-0 fs-4">{{ $coupon->name }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <p id="percentage" class="mb-0">{{ $coupon->percentage }}٪</p>
                                </td>

                                <td>
                                    <p id="created_date" class="mb-0">
                                        {{ $coupon->created_at->format('d/m/Y h:i A') }}
                                    </p>
                                </td>

@php
    $expiry_date = null;
    if ($coupon->expiry_at != null) {
        $expiry_date = \Carbon\Carbon::parse($coupon->expiry_at)->format('d/m/Y h:i A');
    }
@endphp
                                <td>
                                    <p id="expiry_date" class="mb-0">
                                        {{ $expiry_date }}
                                    </p>
                                </td>


                                <td>
                                    <p id="status"
                                        class="mb-0 {{ $coupon->is_active == 0 ? 'badge text-bg-danger' : 'badge text-bg-success' }}">
                                        {{ $coupon->is_active == 0 ? 'Inactive' : 'Active' }}
                                    </p>
                                </td>


                                <td>
                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"
                                        onclick="remove({{ $coupon->id }});">
                                        <i class="ti ti-trash"></i>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Edit"
                                        onclick="edit('{{ json_encode($coupon) }}')">
                                        <i class="ti ti-pencil"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr id="empty">
                                <td colspan="5" class="text-center">Nothing to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>


    @include('pages.components.large_model', ['title' => 'Coupon'])

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function add() {
            showFormModal(); // Call the function to show the form without any data
        }

        function edit(addition) {
            // Parse the addition data from the data attribute
            const data = JSON.parse(addition);

            // Call the function to show the form with pre-filled data
            showFormModal(data);
        }

        function showFormModal(data = null) {
            console.log(data);

            let html = `
        <div class="mb-3">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Enter Name here" value="${data ? data.name : ''}">
            <label for="name">Name</label>
          </div>

                    <div class="form-floating mb-3">
            <input  type="datetime-local" class="form-control" id="expiry_at" name="expiry_at" value="${data ? data.expiry_at : ''}">
            <label for="expiry_at">Expiry Date</label>
          </div>

             <div class="form-floating mb-3">
            <input type="text" class="form-control" id="percentage" placeholder="Enter percentage here" value="${data ? data.percentage : ''}">
            <label for="percentage">Percentage</label>
          </div>

                              <div class="form-floating mb-3">
    <select name="is_active" id="is_active" class="form-select">
        <option ${data ? (data.is_active == 1 ? 'selected' : '') : ''} value="1" >Active</option>
        <option ${data ? (data.is_active == 0 ? 'selected' : '') : ''} value="0">Inactive</option>
    </select>
            <label for="is_active">Status</label>
          </div>



        </div>
      `;

            $('#sz_large_model .modal-body').html(html);
            $('#sz_large_model').modal('show');

            // If editing, store the ID for later use
            if (data) {
                $('#sz_large_model').data('editingId', data.id);
            } else {
                $('#sz_large_model').removeData('editingId');
            }
        }

        $('#sz_large_model').on('click', '#btnAdd', () => {
            // Define an array of input IDs to validate
            const inputIds = ['name', 'percentage', "is_active"];
            const inputValues = {};

            // Get the input values and perform validation
            let isValid = true;

            inputIds.forEach(id => {
                const value = $(`#sz_large_model #${id}`).val().trim();
                inputValues[id] = value; // Store the value for AJAX request

                // Perform validation
                if (value === '') {
                    isValid = false;
                    toastr.error(`${id.charAt(0).toUpperCase() + id.slice(1)} is required`);
                }
            });
            inputValues["expiry_at"] = $("#expiry_at").val();

            // If the form is valid, send data via AJAX
            if (isValid) {

                const formData = new FormData(); // Create a new FormData object
                formData.append('name', inputValues['name']);
                formData.append('percentage', inputValues['percentage']);
                formData.append('expiry_at', inputValues['expiry_at']);
                formData.append('is_active', inputValues['is_active']);


                // Check if we're editing an existing item
                const editingId = $('#sz_large_model').data('editingId');
                let url = '{{ route('coupons.store') }}'; // Default to the "add" URL
                let method = 'POST';

                if (editingId) {
                    url = `/coupons/${editingId}`; // Update with your backend "edit" URL
                }


                $.ajax({
                    url: url,
                    type: method,
                    data: formData,
                    processData: false, // Prevent jQuery from automatically transforming the data into a query string
                    contentType: false, // Set content type to false to let the browser set it
                    success: function(response) {
                        $("#empty").hide();
                        console.log(response);

                        // Hide the modal
                        $('#sz_large_model').modal('hide');

                        // Check if the response contains the addition data
                        if (response.coupon) {
                            const data = response.coupon;

                            let row = document.getElementById(`ele_${data.id}`);

                            // If the item already exists in the table, update it
                            if (row) {
                                row.querySelector('#name').innerText = data.name;
                                row.querySelector('#percentage').innerText = data.percentage + '%';
                                row.querySelector('#expiry_date').innerText = data.expiry_at;
                                row.querySelector('#status').innerText = data.is_active == 1 ?
                                    'Active' : 'Inactive';
                                row.querySelector('#status').className =
                                    `mb-1 badge text-bg-${data.is_active == 1 ? 'success' : 'danger'}`;
                                row.querySelector('#created_date').innerText = new Date(data.created_at)
                                    .toLocaleString('en-GB', {
                                        day: '2-digit',
                                        month: '2-digit',
                                        year: 'numeric',
                                        hour: '2-digit',
                                        minute: '2-digit',
                                        hour12: true
                                    }).replace(',', '');
                            } else {
                                // If the item is new, add a new row to the table
                                const newRow = `
                  <tr id="ele_${data.id}">
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="ms-3">
                          <h6 id="name" class="mb-0 fs-4">${data.name}</h6>
                        </div>
                      </div>
                    </td>

                    <td>
                        <p id="percentage" class="mb-0">${data.percentage}٪</p>
                    </td>

                        <td>
<p id="created_date" class="mb-0">
    ${new Date(data.created_at).toLocaleString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
    }).replace(',', '')}
</p>
                    </td>

                    <td>
                        <p id="expiry_date" class="mb-0">${data.expiry_at ?? ''}</p>
                    </td>

                                        <td>
                        <p id="status" class="mb-0 ${data.is_active == 1 ? 'badge text-bg-success' : 'badge text-bg-danger'}">${data.is_active == 1 ? 'Active' : 'Inactive'}</p>
                    </td>

                    <td>
                      <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Trash" onclick="remove(${data.id});">
                        <i class="ti ti-trash"></i>
                      </a>
                      <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" onclick="edit('${JSON.stringify(data)}')">
                        <i class="ti ti-pencil"></i>
                      </a>
                    </td>
                  </tr>
                `;
                                $('tbody').prepend(newRow); // Append new row to the table body
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            }
        });

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
                        url: '{{ route('coupons.delete') }}',
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
