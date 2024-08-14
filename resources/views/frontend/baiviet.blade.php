@extends('frontend.layouts.user-app')
@section('content')
    <main id="main" class="text-dark">
        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content row" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                            <div class="post-meta">
                                <span class="date">
                                    {{ $tin->theloai->ten }}
                                </span>
                                <span class="mx-1">&bullet;</span> <span>{{ $tin->created_at }}</span>
                            </div>
                            <h1 class="mb-5">{{ $tin->ten_bai }}</h1>
                            {{-- Ghi hoa chữ cái đầu --}}
                            {{-- <p>{!! highlight_first_character($tin->noi_dung) !!}</p> --}}
                            <p>
                                {!! $tin->noi_dung !!}
                            </p>
                        </div><!-- End Single Post Content -->

                        <!-- ======= Comments ======= -->
                        <div class="comments col-12">
                            <h5 class="comment-title py-4 mt-5">{{ $binhluanCount }} Bình Luận</h5>


                            @foreach ($binhluan as $item)
                                <div class="comment d-flex mt-3">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm rounded-circle">
                                            <img class="avatar-img" src="{{ url('img/person-2.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1 ms-2 ms-sm-3">
                                        <div class="comment-meta d-flex">
                                            <h6 class="me-2">{{ $item->user->name }}</h6>
                                            <span class="text-muted">{{ $item->created_at }}</span>
                                        </div>
                                        <div class="comment-body">
                                            {{ $item->noi_dung }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div><!-- End Comments -->

                        <!-- ======= Comments Form ======= -->
                        <div class="row justify-content-center mt-5 col-12">
                            <div class="col-lg-12">
                                <h5 class="comment-title">Để Lại Bình Luận</h5>

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">
                                    <form action="{{ route('comments.store', $tin->id) }}" method="POST">
                                        @csrf
                                        <div class="col-12 mb-3">
                                            <label for="comment-message">Nội Dung</label>
                                            <textarea class="form-control" id="comment-message" name="comment_message" placeholder="Nội dung bình luận của bạn"
                                                cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary" value="Đăng Bình Luận">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- End Comments Form -->

                    </div>
                    @include('frontend.layouts.sidebar')
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
