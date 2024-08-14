@extends('backend/layouts/app-admin')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách người dùng</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý người dùng</li>
                    <li class="breadcrumb-item active">Người dùng</li>
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
                                <h5 class="card-title text-uppercase">Danh sách người dùng</h5>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Tên người dùng</th>
                                        {{-- <th class="text-center">Ảnh</th> --}}
                                        <th>Email</th>
                                        <th>Vai Trò</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Tham Gia</th>
                                        <th class="text-center">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- Lặp hiện thị danh sách người dùng --}}

                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">
                                                {{ $item->id }}
                                            </td>
                                            <td style="width: 250px;">{{ $item->name }}</td>
                                            {{-- <td class="text-center" style="width: 200px;">
                                                @if ($item->avatar)
                                                    <img src="backend/img/{{ $item->avatar }}" style="max-height: 100px;"
                                                        class="img-customer">
                                                @else
                                                    <img src="{{ url('backend/img/no-image.jpg') }}"
                                                        style="max-height: 100px;" class="object-cover img-customer">
                                                @endif
                                            </td> --}}
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @if ($item->role == 0)
                                                    Người dùng
                                                @else
                                                    Quản Lý
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="text-center" style="width: 200px;">
                                                {{-- sua --}}
                                                <button type="button" class="btn btn-warning"><a
                                                        href="{{ route('admin.baiviet.update', $item->id) }}"
                                                        class="text-white"><i class="ri-edit-box-line"></i></a></button>
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
