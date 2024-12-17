@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
<div class="card">
            <div class="card-body">
              <h4 class="card-title mb-0">Add Admin</h4>
              <h6 class="card-subtitle mb-3"></h6>
              <form id="example-form" method="POST" action="{{ route('admin.administrators.store') }}" class="mt-5" novalidate="novalidate">
                <div role="application" class="wizard clearfix" id="steps-uid-1"><div class="content clearfix">
                  <h3 id="steps-uid-1-h-0" tabindex="-1" class="title current">Account</h3>
                  <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">

                    <label class="form-label" for="userName">Name</label>
                    <input id="name" name="name" type="text" class="required form-control mb-3" autocomplete="on">

                    <label class="form-label" for="userName">Username</label>
                    <input id="username" name="username" type="text" class="required form-control mb-3" autocomplete="on">

                    <label class="form-label" for="password">Password</label>
                    <input id="password" name="password" type="password" class="required form-control mb-3" autocomplete="current-password">

                    <label class="form-label" for="confirm">Confirm Password</label>
                    <input id="confirm" name="confirm" type="password" class="required form-control mb-3">

                  </section>
                  @csrf
                </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li aria-hidden="false" aria-disabled="false"><button type="submit" class="btn btn-primary">Save</button></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>

              </form>
            </div>
          </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

  //if there are laravel error make toaster
  @if ($errors->any())
    @foreach ($errors->all() as $error)
      toastr.error('{{ $error }}');
    @endforeach
  @endif

  //if there are success alert
  @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
  @endif


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
            <input type="text" class="form-control" id="symbol" placeholder="Enter Symbol here" value="${data ? data.symbol : ''}">
            <label for="name">Symbol</label>
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
            url : '{{ route("admin.currency.delete") }}',
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