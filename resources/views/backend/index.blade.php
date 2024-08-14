@extends('backend/layouts/app-admin')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Tin Tức</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bx-news"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $tintuc }}</h6>
                                            <span class="text-muted small pt-2 ps-1">tin tức</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">
                                    <h5 class="card-title">Bình Luận</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bx-comment-detail"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $binhluan }}</h6>
                                            <span class="text-muted small pt-2 ps-1">bình luận</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Người Dùng</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $nguoidung }}</h6>
                                            <span class="text-muted small pt-2 ps-1">người dùng</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">



                                <div class="card-body">
                                    <h5 class="card-title">Người Dùng <span>| mới nhất</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Họ và Tên</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Ngày Tham Gia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listuser as $item)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $item->id }}</a></th>
                                                    <td>{{ $item->name }}</td>
                                                    <td><a class="text-primary">{{ $item->email }}</a>
                                                    </td>
                                                    <td>{{ $item->created_at }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Bình Luận <span>| mới nhất</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Người Dùng</th>
                                                <th scope="col">Bài Viết</th>
                                                <th scope="col">Nội Dung</th>
                                                <th scope="col">Thời Gian</th>
                                                <th scope="col" class="text-center">Xem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listbl as $item)
                                                <tr>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->id_baiviet }}</td>
                                                    <td>{{ $item->noi_dung }}</td>
                                                    <td style="width: 100px">{{ $item->created_at }}</td>
                                                    <td class="text-center">
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

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">




                    <!-- News & Updates Traffic -->
                    <div class="card">


                        <div class="card-body pb-0">
                            <h5 class="card-title">Tin Tức <span>| mới nhất</span></h5>

                            <div class="news">

                                @foreach ($listbv as $item)
                                    <div class="post-item clearfix">
                                        <img src="{{ url('backend/img/' . $item->hinh_anh) }}" alt="">
                                        <h4><a href="{{ route('baiviet.one', $item->id) }}">{{ $item->ten_bai }}</a></h4>
                                        <p>{{ $item->mo_ta }}</p>
                                    </div>
                                @endforeach
                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
