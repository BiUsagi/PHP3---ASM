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
        return view('frontend.baiviet', compact('tin'));
    }
}