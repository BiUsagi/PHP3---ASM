<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\TheLoai;

class TinTucController extends Controller
{
    public function baiviet($id)
    {

        $tin = BaiViet::where('id', $id)->first();
        $phoBien = BaiViet::orderBy('luot_xem', 'desc')->limit(6)->get();
        $moiNhat = BaiViet::orderBy('created_at', 'desc')->limit(6)->get();
        $dsLoai = TheLoai::all();


        // Tăng lượt xem
        $tin->luot_xem += 1;
        $tin->save();
        return view('frontend.baiviet', compact('tin', 'phoBien', 'moiNhat', 'dsLoai'));

    }
}