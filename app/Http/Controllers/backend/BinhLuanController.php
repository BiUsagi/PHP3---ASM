<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinhLuan;
use Illuminate\Support\Facades\Auth;

class BinhLuanController extends Controller
{
    public function index()
    {
        $data = BinhLuan::all();
        return view('backend.BinhLuan.index', compact('data'));
    }
}