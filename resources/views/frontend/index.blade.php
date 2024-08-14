@extends('frontend.layouts.user-app')
@section('content')
    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts">
                            <div class="swiper-wrapper">

                                @foreach ($listtin->slice(0, 4) as $tin)
                                    <div class="swiper-slide">
                                        <a href="{{ url('baiviet/' . $tin->id) }}" class="img-bg d-flex align-items-end"
                                            style="background-image: url('{{ url('backend/img/' . $tin->hinh_anh) }}');">
                                            <div class="img-bg-inner">
                                                <h2>{{ $tin->ten_bai }}</h2>
                                                <p>{{ $tin->mo_ta }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach


                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">

                        {{-- Tin đầu tiên --}}
                        @foreach ($listtin->slice(0, 1) as $tin)
                            <div class="post-entry-1 lg">
                                <a href="{{ url('baiviet/' . $tin->id) }}"><img
                                        src="{{ url('backend/img/' . $tin->hinh_anh) }}" alt=""
                                        class="img-fluid img-customer-main"></a>
                                <div class="post-meta">
                                    <span class="date">
                                        {{ $tin->theloai->ten }}
                                    </span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>J{{ $tin->created_at }}</span>
                                </div>
                                <h2><a href="{{ url('baiviet/' . $tin->id) }}">{{ $tin->ten_bai }}</a></h2>
                                <p class="mb-4 d-block">{{ $tin->mo_ta }}</p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo">
                                        @if ($tin->user->hinh_anh)
                                            <img src="backend/img/{{ $tin->user->hinh_anh }}" class="img-fluid">
                                        @else
                                            <img src="{{ url('backend/img/no-image.jpg') }}" alt=""
                                                class="img-fluid">
                                        @endif

                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $tin->user->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">


                                {{-- 3 tin cột 2 --}}
                                @foreach ($listtin->slice(1, 3) as $tin)
                                    <div class="post-entry-1">
                                        <a href="{{ url('baiviet/' . $tin->id) }}"><img
                                                src=" {{ url('backend/img/' . $tin->hinh_anh) }}" alt=""
                                                class="img-fluid img-customer"></a>
                                        <div class="post-meta">
                                            <span class="date">
                                                {{ $tin->theloai->ten }}
                                            </span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $tin->created_at }}</span>
                                        </div>
                                        <h2><a href="{{ url('baiviet/' . $tin->id) }}">{{ $tin->ten_bai }}</a></h2>
                                    </div>
                                @endforeach


                            </div>
                            <div class="col-lg-4 border-start custom-border">

                                {{-- 3 tin cột 3 --}}
                                @foreach ($listtin->slice(4, 3) as $tin)
                                    <div class="post-entry-1">
                                        <a href="{{ url('baiviet/' . $tin->id) }}"><img
                                                src=" {{ url('backend/img/' . $tin->hinh_anh) }}" alt=""
                                                class="img-fluid img-customer"></a>
                                        <div class="post-meta">
                                            <span class="date">
                                                {{ $tin->theloai->ten }}
                                            </span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $tin->created_at }}</span>
                                        </div>
                                        <h2><a href="{{ url('baiviet/' . $tin->id) }}">{{ $tin->ten_bai }}</a></h2>
                                    </div>
                                @endforeach

                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Nổi Bật</h3>
                                    <ul class="trending-post">

                                        {{-- Đếm --}}
                                        @php
                                            $counter = 1;
                                        @endphp

                                        @foreach ($noibat as $top)
                                            <li>
                                                <a href="{{ route('baiviet.one', $top->id) }}">
                                                    <span class="number">{{ $counter }}</span>
                                                    <h3>{{ $top->ten_bai }}</h3>
                                                    <span class="author">{{ $top->user->name }}</span>
                                                </a>
                                            </li>

                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach

                                    </ul>
                                </div>

                            </div> <!-- End Trending Section -->
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

        <!-- ======= Esport Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>ESPORTS</h2>
                    <div><a href="category.html" class="more">Xem Thêm</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">

                        <div class="d-lg-flex post-entry-2">

                            {{-- Bài viết đầu tiên --}}
                            @foreach ($esports->slice(0, 1) as $esp)
                                <a href="{{ url('baiviet/' . $esp->id) }}"
                                    class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="{{ url('backend/img/' . $esp->hinh_anh) }}" alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $esp->theloai->ten }}</span> <span
                                            class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                    <h3><a href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten_bai }}</a></h3>
                                    <p>{{ $esp->mo_ta }}</p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="img/person-2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $esp->user->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="row">
                            <div class="col-lg-4">

                                {{-- 2 bài dưới --}}
                                @foreach ($esports->slice(1, 1) as $esp)
                                    <div class="post-entry-1 border-bottom">
                                        <a href="{{ url('baiviet/' . $esp->id) }}"><img
                                                src="{{ url('backend/img/' . $esp->hinh_anh) }}" alt=""
                                                class="img-fluid img-customer"></a>
                                        <div class="post-meta"><span class="date">{{ $esp->theloai->ten }}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten_bai }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                                        <p class="mb-4 d-block">{{ $esp->mo_ta }}</p>
                                    </div>
                                @endforeach

                                @foreach ($esports->slice(2, 1) as $esp)
                                    <div class="post-entry-1">
                                        <div class="post-meta"><span class="date">ESPORST</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten_bai }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                                    </div>
                                @endforeach

                            </div>
                            <div class="col-lg-8">

                                {{-- Bài ảnh to nhất --}}
                                @foreach ($esports->slice(3, 1) as $esp)
                                    <div class="post-entry-1">
                                        <a href="{{ url('baiviet/' . $esp->id) }}"><img
                                                src="{{ url('backend/img/' . $esp->hinh_anh) }}" alt=""
                                                class="img-fluid img-customer-big"></a>
                                        <div class="post-meta"><span class="date">{{ $esp->theloai->ten }}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten_bai }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                                        <p class="mb-4 d-block">{{ $esp->mo_ta }}</p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">

                        {{-- 6 baif tiếp theo --}}
                        @foreach ($esports->slice(4, 6) as $esp)
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">{{ $esp->theloai->ten }}</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                <h2 class="mb-2"><a href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten_bai }}</a>
                                </h2>
                                <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section><!-- End Culture Category Section -->



        <!-- ======= Công Nghệ Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Công Nghệ</h2>
                    <div><a href="category.html" class="more">Xem Thêm</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9 order-md-2">


                        {{-- bài viết đầu tiên bên trái --}}
                        @foreach ($congnghe->slice(0, 1) as $item)
                            <div class="d-lg-flex post-entry-2">
                                <a href="{{ route('baiviet.one', $item->id) }}"
                                    class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                                    <img src="{{ url('backend/img/' . $item->hinh_anh) }}" alt=""
                                        class="img-fluid img-customer-big">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span> <span
                                            class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span></div>
                                    <h3><a href="{{ route('baiviet.one', $item->id) }}"> {{ $item->ten_bai }} </a></h3>
                                    <p>{{ $item->mo_ta }}
                                    </p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="img/person-4.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $item->user->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="row">
                            <div class="col-lg-4">
                                {{-- 2 bài viết dưới --}}
                                @foreach ($congnghe->slice(1, 1) as $item)
                                    <div class="post-entry-1 border-bottom">
                                        <a href="{{ route('baiviet.one', $item->id) }}"><img
                                                src="{{ url('backend/img/' . $item->hinh_anh) }}" alt=""
                                                class="img-fluid img-customer"></a>
                                        <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                                        </div>
                                        <h2 class="mb-2"><a
                                                href="{{ route('baiviet.one', $item->id) }}">{{ $item->ten_bai }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                                        <p class="mb-4 d-block"> {{ $item->mo_ta }} </p>
                                    </div>
                                @endforeach

                                @foreach ($congnghe->slice(2, 1) as $item)
                                    <div class="post-entry-1">
                                        <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                                        </div>
                                        <h2 class="mb-2"><a
                                                href="{{ route('baiviet.one', $item->id) }}">{{ $item->ten_bai }}</a>
                                        </h2>
                                        <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-lg-8">


                                {{-- ảnh to nhất --}}
                                @foreach ($congnghe->slice(3, 1) as $item)
                                    <div class="post-entry-1">
                                        <a href="{{ route('baiviet.one', $item->id) }}"><img
                                                src="{{ url('backend/img/' . $item->hinh_anh) }}" alt=""
                                                class="img-fluid img-customer-big"></a>
                                        <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                                        </div>
                                        <h2 class="mb-2"><a
                                                href="{{ route('baiviet.one', $item->id) }}">{{ $item->ten_bai }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                                        <p class="mb-4 d-block">{{ $item->mo_ta }}</p>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">

                        {{-- Hàng dài đầu tiên --}}
                        @foreach ($congnghe->slice(4, 6) as $cn)
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">{{ $cn->theloai->ten }}</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $cn->created_at }}</span></div>
                                <h2 class="mb-2"><a href="{{ url('baiviet/' . $cn->id) }}">{{ $cn->ten_bai }}</a>
                                </h2>
                                <span class="author mb-3 d-block">{{ $esp->user->name }}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section><!-- End Business Category Section -->


    </main><!-- End #main -->
@endsection
