@extends('backend/layouts/app-admin')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách bình luận</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý bình luận</li>
                    <li class="breadcrumb-item active">Bình luận</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-top d-flex justify-content-between">
                                <h5 class="card-title text-uppercase">Danh sách bình luận</h5>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Người Dùng</th>
                                        <th class="text-center">Bài Viết</th>
                                        <th class="text-center">Nội Dung</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Ngày Đăng</th>
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
                                            <td>{{ $item->user->name }}</td>
                                            <td style="width: 250px;">{{ $item->baiviet->ten_bai }}</td>
                                            <td class="text-center">{{ $item->noi_dung }}</td>
                                            <td style="width: 150px;">{{ $item->created_at }}</td>
                                            <td class="text-center" style="width: 150px;">
                                                {{-- xem --}}
                                                <button type="button" class="btn btn-info "><a
                                                        href="{{ route('baiviet.one', $item->id_baiviet) }}"
                                                        class="text-white" target="_blank"><i
                                                            class="bi bi-eye-fill"></i></a></button>
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
