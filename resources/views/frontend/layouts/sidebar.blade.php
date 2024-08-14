<div class="col-md-3">
    <!-- ======= Sidebar ======= -->
    <div class="aside-block">

        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular"
                    aria-selected="true">Phổ Biến</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest"
                    type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Mới Nhất</button>
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
                        <h2 class="mb-2"><a href="{{ route('baiviet.one', $item->id) }}">{{ $item->ten_bai }}</a></h2>
                        <span class="author mb-3 d-block">{{ $item->user->name }}</span>
                    </div>
                @endforeach
            </div> <!-- End Popular -->


            <!-- Latest -->
            <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                @foreach ($moiNhat as $item)
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">{{ $item->theloai->ten }}</span>
                            <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                        </div>
                        <h2 class="mb-2"><a href="{{ route('baiviet.one', $item->id) }}">{{ $item->ten_bai }}</a></h2>
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
                <li><a href="{{ route('theloai.id', $item->id) }}"><i class="bi bi-chevron-right"></i>
                        {{ $item->ten }}</a>
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
