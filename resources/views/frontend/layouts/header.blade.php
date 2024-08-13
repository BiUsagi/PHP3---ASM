<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="img/logo.png" alt="">  --}}
            <h1>NoahBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li class="dropdown"><a href="{{ route('theloai') }}"><span>Thể Loại</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('timkiem') }}">Tìm Kiếm</a></li>


                        {{-- Lấy danh sách loại  --}}
                        @php
                            $danhsach_loai = App\Models\Theloai::all();
                        @endphp

                        @foreach ($danhsach_loai as $dsl)
                            <li><a href="{{ route('theloai.id', $dsl->id) }}">{{ $dsl->ten }}</a></li>
                        @endforeach


                    </ul>
                </li>

                <li><a href="{{ route('gioithieu') }}">Giới Thiệu</a></li>
                <li><a href="{{ route('lienhe') }}">Liên Hệ</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">

            <nav id="navbar" class="navbar">
                <ul>
                    @auth
                        <li class="dropdown">
                            <a href="#">
                                <span>{{ Auth::user()->name }}</span>
                                <i class="bi bi-chevron-down dropdown-indicator"></i>
                            </a>
                            <ul>
                                <li><a href="http://127.0.0.1:8000/user/profile">Thông Tin Tài Khoản</a></li>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                        xuất</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                    @endauth
                </ul>
                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>



            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header><!-- End Header -->
