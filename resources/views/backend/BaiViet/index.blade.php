@extends('backend/layouts/app-admin')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách bài viết</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý bài viết</li>
                    <li class="breadcrumb-item active">Bài viết</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-top d-flex justify-content-between">
                                <h5 class="card-title text-uppercase">Danh sách bài viết</h5>
                                <a href="{{ route('admin.baiviet.create') }}" class="btn-customize"><i
                                        class="bi bi-plus-lg"></i>
                                    Thêm bài viết</a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Tên Bài Viết</th>
                                        <th class="text-center">Ảnh Bìa</th>
                                        <th>Thể Loại</th>
                                        <th>Tác Giả</th>
                                        <th>Lượt Xem</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Ngày Tạo</th>
                                        <th class="text-center">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- Lặp hiện thị danh sách bài viết --}}

                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">
                                                {{ $item->id }}
                                            </td>
                                            <td style="width: 250px;">{{ $item->ten_bai }}</td>
                                            <td class="text-center" style="width: 200px;">
                                                @if ($item->hinh_anh)
                                                    <img src="backend/img/{{ $item->hinh_anh }}" style="max-height: 100px;"
                                                        class="img-customer">
                                                @else
                                                    <img src="{{ url('backend/img/no-image.jpg') }}"
                                                        style="max-height: 100px;" class="object-cover img-customer">
                                                @endif
                                            </td>
                                            <td>{{ $item->theloai->ten }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td class="text-center">{{ $item->luot_xem }}</td>
                                            <td style="width: 100px;">{{ $item->created_at }}</td>
                                            <td class="text-center" style="width: 200px;">
                                                {{-- xem --}}
                                                <button type="button" class="btn btn-info "><a
                                                        href="{{ route('baiviet.one', $item->id) }}" class="text-white"
                                                        target="_blank"><i class="bi bi-eye-fill"></i></a></button>
                                                {{-- sua --}}
                                                <button type="button" class="btn btn-warning"><a
                                                        href="{{ route('admin.baiviet.update', $item->id) }}"
                                                        class="text-white"><i class="ri-edit-box-line"></i></a></button>
                                                {{-- xoa --}}
                                                <button type="button" class="btn btn-danger"><a
                                                        href="{{ route('admin.baiviet.delete', $item->id) }}"
                                                        class="text-white"> <i
                                                            class="ri-delete-bin-5-line"></i></a></button>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
