@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Images List</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Images List</li>
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

            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>


            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($post->images as  $image)


                            <tr id="ele_{{ $image->id }}">

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h6 id="name" class="mb-0 fs-4">{{ $loop->iteration }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="" style="width: 40px">
                                                <img width="100%" src="{{asset('storage/'.$image->path)}}" alt="">
                                        </div>
                                    </div>
                                </td>



                                <td>
                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"
                                        onclick="remove({{ $image->id }});">
                                        <i class="ti ti-trash"></i>
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
                    {{-- {{ $images->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>


        </div>
    </div>






@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>




        function remove(id) {
            Swal.fire({
                title: 'هل أنت متأكد ؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'نعم',
                cancelButtonText: "لا",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((result) => {
                if (result['isConfirmed']) {
                    $.ajax({
                        method: 'POST',
                        url: `{{ route('admin.posts.images.delete', '') }}/${id}`,
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
