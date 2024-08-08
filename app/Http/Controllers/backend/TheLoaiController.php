<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theloai;

class TheLoaiController extends Controller
{
    public function index()
    {
        $data = Theloai::all();
        return view('backend.TheLoai.index', compact('data'));
    }
    public function create()
    {
        // Mới nhất trên cùng
        $data = Theloai::orderBy('created_at', 'desc')->get();
        return view('backend.TheLoai.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ten_the_loai' => 'required|string|max:255',
        ]);

        // Tạo mới thể loại
        $theloai = new Theloai();
        $theloai->ten = $request->ten_the_loai;
        $theloai->save();

        return redirect()->route('admin.theloai.create')->with('success', 'Thể loại đã được thêm thành công!');
    }
}