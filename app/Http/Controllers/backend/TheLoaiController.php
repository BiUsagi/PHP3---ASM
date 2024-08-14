<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theloai;
use App\Http\Requests\TheLoaiRequest;

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

    public function store(TheLoaiRequest $request)
    {

        // Tạo mới thể loại
        $theloai = new TheLoai();
        $theloai->ten = $request->ten_the_loai;
        $theloai->save();

        return redirect()->route('admin.theloai.create')->with('success', 'Thể loại đã được thêm thành công!');
    }


    function update($id)
    {
        $theloai = TheLoai::find($id);
        return view("/backend/theloai/update", compact('theloai'));
    }

    function up(TheLoaiRequest $request, $id)
    {
        $t = TheLoai::find($id);
        $t->ten = $request->input('ten_the_loai');
        $t->save();
        return redirect()->route('admin.theloai.update', $id)->with('success', 'Thể loại đã được cập nhật thành công!');
    }

    public function delete($id)
    {
        $tab = TheLoai::find($id);
        $tab->delete();
        return redirect()->route('admin.theloai');
    }
}