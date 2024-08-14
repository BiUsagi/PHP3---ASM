<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BaiViet;
use App\Models\BinhLuan;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tintuc = BaiViet::count();
        $binhluan = BinhLuan::count();
        $nguoidung = User::count();

        $listbv = BaiViet::orderBy('created_at', 'desc')->limit(5)->get();
        $listuser = User::orderBy('created_at', 'desc')->limit(5)->get();
        $listbl = BinhLuan::orderBy('created_at', 'desc')->limit(5)->get();
        return view('backend.index', compact('tintuc', 'binhluan', 'nguoidung', 'listbl', 'listuser', 'listbv'));
    }
}