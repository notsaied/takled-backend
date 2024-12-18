@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">قائمة المقالات</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">قائمة المقالات</li>
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
                <div class="row">
                    <div class="col-md-4 col-xl-3">

                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="javascript:void(0)" onclick="showModal('add','')" id="btn-add-item"
                            class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> اضافة
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الصورة</th>
                            <th scope="col">العنوان</th>
                            <th scope="col">اجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                            <tr id="ele_{{ $post->id }}">
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <a href="{{route("admin.posts.images",$post)}}">
                                                <img width="40" src="{{ $post->first_image() }}" alt="">

                                            </a>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 id="name" class="mb-0 fs-4">{{ $post->title }}</h6>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <!-- Trash Icon -->
                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Trash"
                                        onclick="remove({{ $post->id }});">
                                        <i class="ti ti-trash"></i>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="تعديل"
                                        onclick="showModal('edit', {{ $post }})">
                                        <i class="ti ti-pencil"></i>
                                    </a>

                                    <!-- View Icon -->

                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="عرض">
                                        <i class="ti ti-eye"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr id="empty">

                                <td colspan="4">
                                    لا يوجد مقالات
                                </td>

                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <div class="d-flex mt-2">
                <div class="mx-auto">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="new-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل القسم</h1>
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


        function addImage() {
            $('#item-images').append(`
            <div class="mb-3">
                <input type="file" class="form-control" id="image" name="images[]" >
            </div>
            `);
        }

        function modalContent(type, data) {
            console.log(data);

            let method = 'post';
            let url = '';

            if (type === 'add') {
                url = "{{ route('admin.posts.store') }}";
            } else if (type === 'edit') {
                url = `{{ route('admin.posts.update', '') }}/${data.id}`;
            }

            return `
        <form action="${url}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">العنوان</label>
                <input type="text" class="form-control" id="name" name="title" required value="${data.title || ''}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">الوصف</label>
                <textarea id="description" name="description" required class="form-control">${data.description || ''}</textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">التاريخ</label>
                <input type="text" class="form-control" id="date" name="date" required value="${data.date || ''}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">المكان</label>
                <input type="text" class="form-control" id="address" name="address" required value="${data.address || ''}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">المؤلف</label>
                <input type="text" class="form-control" id="author" name="author" required value="${data.author || ''}">
            </div>



             <div class="mb-3" id="item-images">

        <div class="img mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="images[]">

        </div>
    </div>

    <div class="add-image text-end">
            <button class="btn btn-info" type="button" onclick="addImage()">+</button>
        </div>


            <button class="btn btn-primary">حفظ</button>
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
                        url: `{{ route('admin.posts.delete', '') }}/${id}`,
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
