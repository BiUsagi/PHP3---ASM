@extends('frontend.layouts.user-app')
@section('content')
    <main id="main">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-9" data-aos="fade-up">
                        <h3 class="category-title">Thể Loại: {{ $name }}</h3>
                      
                        @foreach ($theloai as $item)
                            <div class="d-md-flex post-entry-2 half">
                                <a href="single-post.html" class="me-4 thumbnail">
                                    <img src="{{ url('backend/img/' . $item->hinh_anh) }}" alt=""
                                        class="img-fluid img-customer-theloai">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span> <span
                                            class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span></div>
                                    <h3><a href="single-post.html">{{ $item->ten_bai }}</a></h3>
                                    <p>{{ $item->mo_ta }}
                                    </p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="img/person-2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">{{ $item->user->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- Phân trang --}}
                        <div class="text-start py-4">
                            <div class="custom-pagination">
                                <div class="text-start py-4">
                                    <div class="custom-pagination">
                                        {{-- Link to previous page --}}
                                        @if ($theloai->onFirstPage())
                                            <a href="#" class="prev disabled">Trước</a>
                                        @else
                                            <a href="{{ $theloai->previousPageUrl() }}" class="prev">Trước</a>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @for ($page = 1; $page <= $theloai->lastPage(); $page++)
                                            @if ($page == $theloai->currentPage())
                                                <a href="#" class="active">{{ $page }}</a>
                                            @else
                                                <a href="{{ $theloai->url($page) }}">{{ $page }}</a>
                                            @endif
                                        @endfor

                                        {{-- Link to next page --}}
                                        @if ($theloai->hasMorePages())
                                            <a href="{{ $theloai->nextPageUrl() }}" class="next">Tiếp theo</a>
                                        @else
                                            <a href="#" class="next disabled">Tiếp theo</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">

                            <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popular" type="button" role="tab"
                                        aria-controls="pills-popular" aria-selected="true">Phổ Biến</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-latest" type="button" role="tab"
                                        aria-controls="pills-latest" aria-selected="false">Mới Nhất</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <!-- Popular -->
                                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                    aria-labelledby="pills-popular-tab">
                                    @foreach ($phoBien as $item)
                                        <div class="post-entry-1 border-bottom">
                                            <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span>
                                                <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                                            </div>
                                            <h2 class="mb-2"><a href="#">{{ $item->ten_bai }}</a></h2>
                                            <span class="author mb-3 d-block">{{ $item->user->name }}</span>
                                        </div>
                                    @endforeach
                                </div> <!-- End Popular -->


                                <!-- Latest -->
                                <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                                    aria-labelledby="pills-latest-tab">
                                    @foreach ($moiNhat as $item)
                                        <div class="post-entry-1 border-bottom">
                                            <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span>
                                                <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                                            </div>
                                            <h2 class="mb-2"><a href="#">{{ $item->ten_bai }}</a></h2>
                                            <span class="author mb-3 d-block">{{ $item->user->name }}</span>
                                        </div>
                                    @endforeach

                                </div> <!-- End Latest -->

                            </div>
                        </div>


                        <div class="aside-block">
                            <h3 class="aside-title">THỂ LOẠI</h3>
                            <ul class="aside-links list-unstyled">
                                @foreach ($dsLoai as $item)
                                    <li><a href="category.html"><i class="bi bi-chevron-right"></i> {{ $item->ten }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- End Categories -->

                        <div class="aside-block">
                            <h3 class="aside-title">Tags</h3>
                            <ul class="aside-tags list-unstyled">
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Celebrity</a></li>
                                <li><a href="category.html">Startups</a></li>
                                <li><a href="category.html">Travel</a></li>
                            </ul>
                        </div><!-- End Tags -->

                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
