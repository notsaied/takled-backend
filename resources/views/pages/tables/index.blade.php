@extends('layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
<div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Tables list</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Tables list</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="{{ asset('build/images/breadcrumb/ChatBc.png') }}" alt="modernize-img" class="img-fluid mb-n4">
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
                  <input type="text" class="form-control product-search ps-5" name="q" id="input-search" placeholder="Search ..." value="{{ request('q') }}">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                  </form>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                  <a href="javascript:void(0)" onclick="add();" id="btn-add-item" class="btn btn-primary d-flex align-items-center">
                    <i class="ti ti-plus text-white me-1 fs-5"></i> Add
                  </a>
                </div>
              </div>
            </div>

                <div class="table-responsive border rounded">
                  <table class="table align-middle text-nowrap mb-0">
                    <thead>
                      <tr>
                        <th scope="col">Table</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">QR</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($tables as $table)
                        <tr id="ele_{{ $table->id }}">
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="ms-3">
                                <h6 id="name" class="mb-0 fs-4">{{ $table->name }}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p id="date" class="mb-0">{{ $table->created_at->format('D, M d Y') }}</p>
                          </td>
                          <td>
                            <span class="mb-1 badge text-bg-{{ ($table->is_active == 0) ? 'danger' : 'success' }}">{{ ($table->is_active == 0) ? 'Inactive' : 'Active' }}</span>
                          </td>
                          <td>
                            <i onclick="showQr({{ json_encode($table) }});" class="fas fa-qrcode"></i>
                          </td>
                          <td>
                                <!-- Trash Icon -->
                                <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Trash" onclick="remove({{ $table->id }});">
                                  <i class="ti ti-trash"></i>
                                </a>

                                <!-- Edit Icon -->
                                <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" onclick="edit('{{ json_encode($table) }}')">
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

          @include('pages.components.large_model',['title' => 'Tables'])
          @include('pages.tables.qr_model')

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
      let html = `
        <div class="mb-3">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Enter Name here" value="${data ? data.name : ''}">
            <label for="name">Name</label>
          </div>

          <div class="form-check form-switch">
              <label class="form-check-label" for="isActive">Is Active</label>
              <input class="form-check-input" type="checkbox" id="isActive" ${(data && data.is_active) ? 'checked' : ''}>
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
      const inputIds = ['name'];
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

      // If the form is valid, send data via AJAX
      if (isValid) {
        const formData = new FormData(); // Create a new FormData object
        formData.append('name', inputValues['name']);
        formData.append('is_active', $('#sz_large_model #isActive').is(':checked') ? 1 : 0); // Send is_active value

        // Check if we're editing an existing item
        const editingId = $('#sz_large_model').data('editingId');
        let url = '{{ route("tables.store") }}'; // Default to the "add" URL
        let method = 'POST';

        if (editingId) {
          url = `/tables/${editingId}`; // Update with your backend "edit" URL
        }


        $.ajax({
          url: url,
          type: method,
          data: formData,
          processData: false, // Prevent jQuery from automatically transforming the data into a query string
          contentType: false, // Set content type to false to let the browser set it
          success: function(response) {
            $("#empty").hide(); 
            // Hide the modal
            $('#sz_large_model').modal('hide');

            // Check if the response contains the addition data
            if (response.table) {
              const data = response.table;
              let row = document.getElementById(`ele_${data.id}`);

              // If the item already exists in the table, update it
              if (row) {
                row.querySelector('#name').innerText = data.name;
                // Update status
                const statusBadge = row.querySelector('td:nth-child(3) .badge');
                statusBadge.className = `mb-1 badge text-bg-${(data.is_active == 0) ? 'danger' : 'success'}`;
                statusBadge.innerText = (data.is_active == 0) ? 'Inactive' : 'Active';
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
                      <p id="date" class="mb-0">${new Date(data.created_at).toDateString()}</p>
                    </td>
                    <td>
                      <span class="mb-1 badge text-bg-${(data.is_active == 0) ? 'danger' : 'success'}">${(data.is_active == 0) ? 'Inactive' : 'Active'}</span>
                    </td>
                    <td>
                      <i class="fas fa-qrcode"></i>
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
        if (result['isConfirmed']){
          $.ajax({
            method : 'POST',
            url : '{{ route("tables.delete") }}',
            data : {
              id : id
            },
            success : () => {
              $('#ele_' + id).remove();
            },
            error : () => {
              toastr.error('Error submitting the form. Please try again.');
            }
          });
        }
      })
    }

    function showQr(data) {
      let link = 'https://api.qrserver.com/v1/create-qr-code/?size=250x250&data={{ url("/") }}/scan/table/' + data.id;
      $('#table_qr_model .modal-body img').attr('src',link);
      $('#table_qr_model #qr_download').attr('href',link);
      $('#table_qr_model').modal('show');
    }

</script>
@endsection
