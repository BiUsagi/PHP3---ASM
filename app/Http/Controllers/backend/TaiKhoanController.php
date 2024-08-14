<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TaiKhoanRequest;

class TaiKhoanController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('backend.TaiKhoan.index', compact('data'));
    }

    function update($id)
    {
        $taikhoan = User::find($id);
        return view("/backend/taikhoan/update", compact('taikhoan'));
    }

    public function up(TaiKhoanRequest $request, $id)
    {
        $taikhoan = User::find($id);
        $taikhoan->role = $request->input('role');
        $taikhoan->save();

        return redirect()->route('admin.taikhoan.update', $id)->with('success', 'Tài khoản đã được cập nhật thành công!');
    }


}