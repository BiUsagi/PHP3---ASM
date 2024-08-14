@extends('backend/layouts/app-admin')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Quản lí tài khoản</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Quản lý tài khoản</li>
                    <li class="breadcrumb-item active">Tài khoản</li>
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
                            <form action="{{ route('admin.taikhoan.up', $taikhoan->id) }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="inputNanme" class="form-label-customize">Tên người dùng</label>
                                    <input type="text" class="form-control-customize" id="inputNanme"
                                        name="ten_tai_khoan" value="{{ $taikhoan->name }}" disabled>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="inputNanme" class="form-label-customize">Chức vụ <span
                                            class="note">(*)</span></label>
                                    <select name="role" id="select2" class="form-control-select2 setupSelect2">
                                        <option value="0" {{ $taikhoan->role == 0 ? 'selected' : '' }}>Người dùng
                                        </option>
                                        <option value="1" {{ $taikhoan->role == 1 ? 'selected' : '' }}>Quản lý</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-primary mt-3" value="Cập Nhật">
                            </form>
                            <br>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
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
