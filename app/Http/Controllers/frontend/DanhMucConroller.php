<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theloai;
use App\Models\BaiViet;

class DanhMucConroller extends Controller
{
    public function index()
    {
        $theloai = BaiViet::paginate(5);
        $name = "TẤT CẢ";
        $phoBien = BaiViet::orderBy('luot_xem', 'desc')->limit(6)->get();
        $moiNhat = BaiViet::orderBy('created_at', 'desc')->limit(6)->get();
        $dsLoai = TheLoai::all();

        return view('frontend.theloai', compact('theloai', 'name', 'phoBien', 'moiNhat', 'dsLoai'));
    }
    public function theloai($id)
    {
        $theloai = BaiViet::where('id_loai', $id)->paginate(5);
        $tenTL = Theloai::select('ten')->where('id', $id)->first();
        $name = $tenTL->ten;
        $phoBien = BaiViet::where('id_loai', $id)->orderBy('luot_xem', 'desc')->limit(6)->get();
        $moiNhat = BaiViet::where('id_loai', $id)->orderBy('created_at', 'desc')->limit(6)->get();
        $dsLoai = TheLoai::all();

        return view('frontend.theloai', compact('theloai', 'name', 'phoBien', 'moiNhat', 'dsLoai'));
    }
}