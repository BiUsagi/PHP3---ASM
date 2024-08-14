<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaiKhoanController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('backend.TaiKhoan.index', compact('data'));
    }
}