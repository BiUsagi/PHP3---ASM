@extends('backend/layouts/app-admin')

@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Quản lý bài viết</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý bài viết</li>
                    <li class="breadcrumb-item active">Thêm bài viết</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <form action="{{ route('admin.baiviet.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-9">
                        {{-- Thông tin chung --}}
                        <div class="card">
                            <div class="card-header text-uppercase">Thông tin chung</div>
                            <div class="card-body">

                                <div class="col-12">
                                    <label for="tieude" class="form-label-customize">Tiêu đề <span
                                            class="note">(*)</span></label>
                                    <input type="text" class="form-control-customize " id="tieude" name="tieude">
                                    @if ($errors->has('tieude'))
                                        <span class="text-danger">{{ $errors->first('tieude') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="mota" class="form-label-customize">Mô tả <span
                                            class="note">(*)</span></label>
                                    <textarea type="text" class="form-control-customize ck-editor" id="description" name="mota" data_height="100"></textarea>
                                    @if ($errors->has('mota'))
                                        <span class="text-danger">{{ $errors->first('mota') }}</span>
                                    @endif
                                </div>

                                <div class="col-12">
                                    <label for="noidung" class="form-label-customize">Nội dung <span
                                            class="note">(*)</span></label>
                                    <textarea type="text" class="form-control-customize ck-editor" name="noidung" id="editor"></textarea>
                                    @if ($errors->has('noidung'))
                                        <span class="text-danger">{{ $errors->first('noidung') }}</span>
                                    @endif
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3">
                        <!-- avata -->
                        <div class=" row">
                            <div class="col-12 mg-top">Ảnh Bìa:</div>
                            <div class="col-12 d-flex  justify-content-center">
                                <img src="{{ url('backend/img/no-image.jpg') }}" alt="" class="img-cover"
                                    id="previewImg">
                            </div>
                            <div class="col-12   justify-content-center">
                                <label for="hinh" class="custom-file-upload ">
                                    <input class="form-control mt-2 mb-2" type="file" name="hinhanh" id="hinh"
                                        onchange="previewImage(event)">
                                </label>
                                @if ($errors->has('hinhanh'))
                                    <span class="text-danger">{{ $errors->first('hinhanh') }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- END avata -->
                        <div class="card">
                            <div class="card-header text-uppercase">Thể Loại</div>
                            <div class="card-body">
                                <select name="loai" id="select2" class="form-control-select2 setupSelect2">
                                    {{-- lặp hiện thị loại --}}
                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('loai'))
                                <span class="text-danger">{{ $errors->first('loai') }}</span>
                            @endif
                        </div>


                        <div class="card">
                            <button type="submit" class="btn btn-primary">Thêm Bài Viết</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>

    </main>
@endsection
