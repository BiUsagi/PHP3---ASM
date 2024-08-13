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

                    @include('frontend.layouts.sidebar')

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
