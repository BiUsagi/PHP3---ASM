<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theloai;

class TheLoaiConroller extends Controller
{
    public function index()
    {
        $theloai = Theloai::all();
        return view('frontend.theloai', compact('theloai'));
    }
}