@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
<div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Administrators</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Administrators</li>
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
                  <a href="{{ route('admin.administrators.create') }}" id="btn-add-item" class="btn btn-primary d-flex align-items-center">
                    <i class="ti ti-plus text-white me-1 fs-5"></i> Add
                  </a>
                </div>
              </div>
            </div>

                <div class="table-responsive border rounded">
                  <table class="table align-middle text-nowrap mb-0">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($administrators as $admin)
                          <tr data-info="{{ $admin }}" id="ele_{{ $admin->id }}" >
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="ms-3">
                                  <h6 id="name" class="mb-0 fs-4">{{ $admin->name }}</h6>
                                </div>
                              </div>
                            </td>

                            <td>
                              <span id="username">{{ $admin->username }}</span>
                            </td>

                            <td>
                              <p id="date" class="mb-0">{{ $admin->created_at->format('D, M d Y') }}</p>
                            </td>
 
                            <td>
                                <!-- Trash Icon -->
                                <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Trash" onclick="remove({{ $admin->id }});">
                                  <i class="ti ti-trash"></i>
                                </a>

                                <!-- Edit Icon -->
                                <a class="fs-6 text-muted ms-2" href="{{ route('admin.administrators.edit', $admin->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
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

                <div class="d-flex mt-2">
                      <div class="mx-auto">
                        {{ $administrators->links('pagination::bootstrap-4') }}
                     </div>
                  </div>

           
            </div>
          </div>

          @include('pages.components.large_model',['title' => 'Restaurant'])

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function add() {
      showFormModal(); // Call the function to show the form without any data
    }

    function edit(rest) {
      // Parse the restaurant data from the data attribute
      const data = JSON.parse(rest);

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
        </div>


        <div class="mb-3">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="symbol" placeholder="Enter Symbol here" value="${data ? data.username : ''}">
            <label for="username">Username</label>
          </div>
        </div>  

        <div class="mb-3">

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
      const inputIds = ['name', 'symbol'];
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
        formData.append('symbol', inputValues['symbol']);

        // Check if we're editing an existing item
        const editingId = $('#sz_large_model').data('editingId');
        let url = '{{ route("admin.currency.store") }}'; // Default to the "add" URL
        let method = 'POST';

        if (editingId) {
          url = `/ec-admin/currency/${editingId}`; // Update with your backend "edit" URL
        }

        $.ajax({
          url: url,
          type: method,
          data: formData,
          processData: false, // Prevent jQuery from automatically transforming the data into a query string
          contentType: false, // Set content type to false to let the browser set it
          success: function(response) {
  // Hide the modal
  $('#sz_large_model').modal('hide');

  // Check if the response contains the restaurant data
  if (response.currency) {
    const currency = response.currency;
    let row = document.getElementById(`ele_${currency.id}`);

    // If the item already exists in the table, update it
    if (row) {
      row.querySelector('#name').innerText = currency.name;
      row.querySelector('#symbol').innerText = currency.symbol;
    } else {
      // If the item is new, add a new row to the table
      const tbody = document.querySelector('tbody');
      
      // Properly escape the currency object to prevent issues with quotes in the onclick event
      const currencyJson = JSON.stringify(currency).replace(/'/g, "&apos;").replace(/"/g, "&quot;").replace(/\n/g, "\\n").replace(/\r/g, "\\r").replace(/\t/g, "\\t");

      const newRow = `
        <tr data-info='${currencyJson}' id="ele_${currency.id}">
          <td>
            <div class="d-flex align-items-center">
              <div class="ms-3">
                <h6 id="name" class="mb-0 fs-4">${currency.name}</h6>
              </div>
            </div>
          </td>

          <td>
            <span id="symbol">${currency.symbol}</span>
          </td>

          <td>
            <span id="restaurants">
              <a href="restaurants?currency=${currency.id}">0</a>
            </span>
          </td>

          <td>
            <p id="date" class="mb-0">${new Date(currency.created_at).toDateString()}</p>
          </td>

          <td>
            <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Trash">
              <i class="ti ti-trash"></i>
            </a>
            <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" onclick="edit('${currencyJson}')">
              <i class="ti ti-pencil"></i>
            </a>
          </td>
        </tr>
      `;

      $('tbody').prepend(newRow);
    }
  }
},
          error: function(error) {
            toastr.error('Error submitting the form. Please try again.');
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
            url : '{{ route("admin.administrators.delete") }}',
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
</script>
@endsection 