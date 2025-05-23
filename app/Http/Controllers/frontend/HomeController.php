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
        $listtin = BaiViet::orderBy('luot_xem', 'desc')->get();
        $noibat = BaiViet::select('ten_bai', 'user_id', 'id')
            ->orderBy('luot_xem', 'desc')
            ->limit(5)
            ->get();
        $esports = BaiViet::where('id_loai', '3')
            ->get();
        $congnghe = BaiViet::where('id_loai', '2')
            ->get();
        return view('frontend.index', compact('listtin', 'noibat', 'esports', 'congnghe'));
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