<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\Theloai;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $listtin = BaiViet::all();
        $noibat = BaiViet::select('ten_bai')
            ->orderBy('luot_xem', 'desc')
            ->limit(5)
            ->get();
        $esports = BaiViet::where('id_loai', '3')
            ->get();
        $congnghe = BaiViet::where('id_loai', '2')
            ->get();
        return view('frontend.index', compact('listtin', 'noibat', 'esports', 'congnghe'));
    }
    public function baiviet($id)
    {
        $tin = BaiViet::where('id', $id)->first();
        $loai = Theloai::where('id', $tin->id_loai)->first();
        return view('baiviet', compact('tin', 'loai'));
    }

    public function theloai()
    {
        return view('frontend.theloai');
    }
    public function timkiem()
    {
        return view('frontend.timkiem');
    }
    public function gioithieu()
    {
        return view('frontend.gioithieu');
    }
    public function lienhe()
    {
        return view('frontend.lienhe');
    }
}