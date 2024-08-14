@extends('backend/layouts/app-admin')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách thể loại</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý thể loại</li>
                    <li class="breadcrumb-item active">Thể loại</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-top d-flex justify-content-between">
                                <h5 class="card-title text-uppercase">Danh sách thể loại</h5>
                                <a href="{{ route('admin.theloai.create') }}" class="btn-customize"><i
                                        class="bi bi-plus-lg"></i>
                                    Thêm thể loại</a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Tên Thể Loại</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Ngày Tạo</th>
                                        <th class="text-center">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- Vòng lặp hiện thị danh sách --}}
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">
                                                {{ $item->id }}
                                            </td>
                                            <td>{{ $item->ten }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="text-center">
                                                {{-- sua --}}
                                                <button type="button" class="btn btn-warning"><a
                                                        href="{{ route('admin.theloai.update', $item->id) }}"
                                                        class="text-white"> <i class="ri-edit-box-line"></i></a></button>
                                                {{-- xoa --}}
                                                <button type="button" class="btn btn-danger">
                                                    <a href="{{ route('admin.theloai.delete', $item->id) }}"
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
