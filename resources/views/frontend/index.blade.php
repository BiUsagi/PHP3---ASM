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
                                            style="background-image: url('{{ url('img/' . $tin->hinhanh) }}');">
                                            <div class="img-bg-inner">
                                                <h2>{{ $tin->ten }}</h2>
                                                <p>{{ $tin->mota }}</p>
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

                        @foreach ($listtin->slice(0, 1) as $tin)
                            <div class="post-entry-1 lg">
                                <a href="{{ url('baiviet/' . $tin->id) }}"><img src="{{ url('img/' . $tin->hinhanh) }}"
                                        alt="" class="img-fluid"></a>
                                <div class="post-meta">
                                    <span class="date">
                                        {{-- lấy loại --}}
                                        @php
                                            $loai = DB::table('theloai')
                                                ->select('ten')
                                                ->where('id', $tin->id_loai)
                                                ->first();
                                            echo $loai->ten;
                                        @endphp
                                    </span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>J{{ $tin->created_at }}</span>
                                </div>
                                <h2><a href="{{ url('baiviet/' . $tin->id) }}">{{ $tin->ten }}</a></h2>
                                <p class="mb-4 d-block">{{ $tin->mota }}</p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="img/person-1.jpg" alt="" class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Cameron Williamson</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="{{ url('baiviet/' . $tin->id) }}">The Best Homemade Masks for Face
                                    (keep the Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="{{ url('baiviet/' . $tin->id) }}">10 Life-Changing Hacks Every
                                    Working Mom Should Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">


                                @foreach ($listtin->slice(1, 3) as $tin)
                                    <div class="post-entry-1">
                                        <a href="{{ url('baiviet/' . $tin->id) }}"><img
                                                src=" {{ url('img/' . $tin->hinhanh) }}" alt=""
                                                class="img-fluid"></a>
                                        <div class="post-meta">
                                            <span class="date">
                                                {{-- lấy loại --}}
                                                @php
                                                    $loai = DB::table('theloai')
                                                        ->select('ten')
                                                        ->where('id', $tin->id_loai)
                                                        ->first();
                                                    echo $loai->ten;
                                                @endphp
                                            </span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $tin->created_at }}</span>
                                        </div>
                                        <h2><a href="{{ url('baiviet/' . $tin->id) }}">{{ $tin->ten }}</a></h2>
                                    </div>
                                @endforeach





                            </div>
                            <div class="col-lg-4 border-start custom-border">

                                @foreach ($listtin->slice(4, 3) as $tin)
                                    <div class="post-entry-1">
                                        <a href="{{ url('baiviet/' . $tin->id) }}"><img
                                                src=" {{ url('img/' . $tin->hinhanh) }}" alt=""
                                                class="img-fluid"></a>
                                        <div class="post-meta">
                                            <span class="date">
                                                {{-- lấy loại --}}
                                                @php
                                                    $loai = DB::table('theloai')
                                                        ->select('ten')
                                                        ->where('id', $tin->id_loai)
                                                        ->first();
                                                    echo $loai->ten;
                                                @endphp
                                            </span>
                                            <span class="mx-1">&bullet;</span> <span>{{ $tin->created_at }}</span>
                                        </div>
                                        <h2><a href="{{ url('baiviet/' . $tin->id) }}">{{ $tin->ten }}</a></h2>
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
                                                <a href="">
                                                    <span class="number">{{ $counter }}</span>
                                                    <h3>{{ $top->ten }}</h3>
                                                    <span class="author">Jane Cooper</span>
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

        <!-- ======= Culture Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>ESPORTS</h2>
                    <div><a href="category.html" class="more">See All Esports</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">

                        <div class="d-lg-flex post-entry-2">

                            @foreach ($esports->slice(0, 1) as $esp)
                                <a href="{{ url('baiviet/' . $esp->id) }}"
                                    class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="{{ url('img/' . $esp->hinhanh) }}" alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">ESPORST</span> <span
                                            class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                    <h3><a href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten }}</a></h3>
                                    <p>{{ $esp->mota }}</p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="img/person-2.jpg" alt=""
                                                class="img-fluid"></div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">Wade Warren</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="row">
                            <div class="col-lg-4">

                                @foreach ($esports->slice(1, 1) as $esp)
                                    <div class="post-entry-1 border-bottom">
                                        <a href="{{ url('baiviet/' . $esp->id) }}"><img
                                                src="{{ url('img/' . $esp->hinhanh) }}" alt=""
                                                class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">ESPORST</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten }}</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                        <p class="mb-4 d-block">{{ $esp->mota }}</p>
                                    </div>
                                @endforeach

                                @foreach ($esports->slice(2, 1) as $esp)
                                    <div class="post-entry-1">
                                        <div class="post-meta"><span class="date">ESPORST</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten }}</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                @endforeach

                            </div>
                            <div class="col-lg-8">

                                @foreach ($esports->slice(3, 1) as $esp)
                                    <div class="post-entry-1">
                                        <a href="{{ url('baiviet/' . $esp->id) }}"><img
                                                src="{{ url('img/' . $esp->hinhanh) }}" alt=""
                                                class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">ESPORST</span> <span
                                                class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                        <h2 class="mb-2"><a
                                                href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten }}</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                        <p class="mb-4 d-block">{{ $esp->mota }}</p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">

                        @foreach ($esports->slice(0, 6) as $esp)
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">ESPORST</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $esp->created_at }}</span></div>
                                <h2 class="mb-2"><a href="{{ url('baiviet/' . $esp->id) }}">{{ $esp->ten }}</a>
                                </h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section><!-- End Culture Category Section -->

        <!-- ======= Business Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Công Nghệ</h2>
                    <div><a href="category.html" class="more">Xem Thêm</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9 order-md-2">

                        <div class="d-lg-flex post-entry-2">
                            <a href="" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                                <img src="img/post-landscape-3.jpg" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">Business</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h3><a href="">What is the son of Football Coach John Gruden, Deuce Gruden doing
                                        Now?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                    exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error
                                    deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="img/person-4.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Wade Warren</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="post-entry-1 border-bottom">
                                    <a href=""><img src="img/post-landscape-5.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="">11 Work From Home Part-Time Jobs You Can Do
                                            Now</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                        temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                </div>

                                <div class="post-entry-1">
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="">5 Great Startup Tips for Female Founders</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href=""><img src="img/post-landscape-7.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                        temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">


                        @foreach ($congnghe->slice(0, 6) as $cn)
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Công Nghệ</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $cn->created_at }}</span></div>
                                <h2 class="mb-2"><a href="{{ url('baiviet/' . $cn->id) }}">{{ $cn->ten }}</a>
                                </h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section><!-- End Business Category Section -->


    </main><!-- End #main -->
@endsection
