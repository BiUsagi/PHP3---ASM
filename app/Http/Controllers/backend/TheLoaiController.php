<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    public function index()
    {
        return view('backend.TheLoai.index');
    }
    public function create()
    {
        return view('backend.TheLoai.index');
    }
}