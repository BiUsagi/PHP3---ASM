<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index()
    {

        return view('backend.BaiViet.index');
    }

    public function create()
    {
        return view('backend.TheLoai.index');
    }
}