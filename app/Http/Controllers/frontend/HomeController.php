<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTucAsm;
use App\Models\Theloai;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $listtin = TinTucAsm::all();
        $noibat = TinTucAsm::select('ten')
            ->orderBy('luotxem', 'desc')
            ->limit(5)
            ->get();
        $esports = TinTucAsm::where('theloai_id', '3')
            ->get();
        $congnghe = TinTucAsm::where('theloai_id', '6')
            ->get();
        return view('index', compact('listtin', 'noibat', 'esports', 'congnghe'));
    }
    public function tintuc($id)
    {
        $tin = TinTucAsm::where('id', $id)->first();
        $loai = Theloai::where('id', $tin->theloai_id)->first();
        return view('tintuc', compact('tin', 'loai'));
    }

    public function theloai()
    {
        return view('theloai');
    }
    public function timkiem()
    {
        return view('timkiem');
    }
    public function gioithieu()
    {
        return view('gioithieu');
    }
    public function lienhe()
    {
        return view('lienhe');
    }
}