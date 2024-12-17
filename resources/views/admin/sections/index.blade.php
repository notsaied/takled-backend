@extends('admin.layouts.master')

@section('title', env('APP_NAME'))

@section('pageContent')
    <div class="card bg-primary-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">قائمة الاقسام</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dash.home') }}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">قائمة الاقسام</li>
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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>


            @endif

            <div class="table-responsive border rounded">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">العنوان</th>
                            <th scope="col">اجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sections as $section)
                            <tr id="ele_{{ $section->id }}">
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <h6 id="name" class="mb-0 fs-4">{{ $section->title }}</h6>
                                        </div>
                                    </div>
                                </td>


                                <td>

                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="عرض">
                                        <i class="ti ti-eye"></i>
                                    </a>
                                    <!-- Edit Icon -->
                                    <a class="fs-6 text-muted ms-2" href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="تعديل"
                                        onclick="showModal('edit', {{ $section }})">
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
                    {{ $sections->links('pagination::bootstrap-4') }}
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

        function modalContent(type, data) {
            console.log(data);

            let method = 'post';
            let url = '';

            if (type === 'add') {
            } else if (type === 'edit') {
                // Ensure the URL is correct by combining the route and data.id properly
                url = `{{ route('admin.sections.update', '') }}/${data.id}`;
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
                <input type="text" class="form-control" id="description" name="description" required value="${data.description || ''}">
            </div>
                        <div class="mb-3">
                <label for="image" class="form-label">الصورة</label>
                <input type="file" class="form-control" id="image" name="image" >
            </div>
            <button class="btn btn-primary">تعديل</button>
        </form>
    `;
        }



    </script>
@endsection
