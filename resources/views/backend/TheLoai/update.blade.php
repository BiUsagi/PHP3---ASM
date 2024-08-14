@extends('backend/layouts/app-admin')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Quản lí thể loại</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý thể loại</li>
                    <li class="breadcrumb-item active">Thể loại</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header text-uppercase">THÔNG TIN CHUNG</div>
                        <div class="card-body">

                            {{-- form thêm thể loại --}}
                            <form action="{{ route('admin.theloai.up', $theloai->id) }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="inputNanme" class="form-label-customize">Tên thể loại <span
                                            class="note">(*)</span></label>
                                    <input type="text" class="form-control-customize" id="inputNanme" name="ten_the_loai"
                                        value="{{ $theloai->ten }}">
                                </div>
                                <input type="submit" class="btn btn-primary mt-3" value="Thêm thể loại">
                            </form>
                            <br>
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
                        </div>
                    </div>


                </div>



            </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
