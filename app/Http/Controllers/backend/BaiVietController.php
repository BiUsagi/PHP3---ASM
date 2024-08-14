<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaiViet;
use Illuminate\Support\Facades\Storage;
use App\Models\Theloai;

class BaiVietController extends Controller
{
    public function index()
    {
        $data = BaiViet::all();
        return view('backend.BaiViet.index', compact('data'));
    }

    public function create()
    {
        $data = Theloai::select('ten', 'id')->get();
        return view('backend.BaiViet.create', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'tieude' => 'required|max:255',
            'mota' => 'required',
            'noidung' => 'required',
            'loai' => 'required',
            'hinhanh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Xử lý upload hình ảnh
        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/backend/img/baiviet');
            $filePath = $destinationPath . '/' . $name;

            // Kiểm tra xem file đã tồn tại hay chưa
            if (file_exists($filePath)) {
                // Nếu file tồn tại, chỉ sử dụng file hiện tại
                $hinhanh = '/baiviet/' . $name;
            } else {
                // Nếu file không tồn tại, thực hiện upload
                $image->move($destinationPath, $name);
                $hinhanh = '/baiviet/' . $name;
            }
        }
        // Tạo bài viết mới
        $baiviet = new BaiViet();
        $baiviet->ten_bai = $request->tieude;
        $baiviet->mo_ta = $request->mota;
        $baiviet->noi_dung = $request->noidung;
        $baiviet->hinh_anh = $hinhanh;
        $baiviet->id_loai = $request->loai;
        $baiviet->luot_xem = 0;
        $baiviet->user_id = 1;
        $baiviet->save();


        return redirect()->route('admin.baiviet')->with('success', 'Bài viết đã được thêm thành công!');
    }

    function update($id)
    {
        $data = Theloai::select('ten', 'id')->get();
        $baiviet = BaiViet::find($id);
        return view("/backend/baiviet/update", compact('baiviet', 'data'));
    }

    function up(Request $request, $id)
    {
        // Validate dữ liệu
        $request->validate([
            'tieude' => 'required|string|max:255',
            'mota' => 'required|string',
            'noidung' => 'required|string',
            'loai' => 'required|exists:theloai,id',
            'hinhanh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Tìm bài viết
        $baiviet = BaiViet::findOrFail($id);

        // Cập nhật thông tin bài viết
        $baiviet->ten_bai = $request->tieude;
        $baiviet->mo_ta = $request->mota;
        $baiviet->noi_dung = $request->noidung;
        $baiviet->id_loai = $request->loai;

        // Kiểm tra nếu có ảnh mới được upload
        if ($request->hasFile('hinhanh')) {
            // Xóa ảnh cũ nếu có
            if ($baiviet->hinh_anh && Storage::exists('backend/img/' . $baiviet->hinh_anh)) {
                Storage::delete('backend/img/' . $baiviet->hinh_anh);
            }

            // Lưu ảnh mới
            $imageName = time() . '.' . $request->hinhanh->extension();
            $request->hinhanh->move(public_path('backend/img'), $imageName);
            $baiviet->hinh_anh = $imageName;
        }

        // Lưu các thay đổi
        $baiviet->save();

        return redirect()->route('admin.baiviet')->with('success', 'Bài viết đã được cập nhật thành công!');
    }

    public function delete($id)
    {
        $tab = BaiViet::find($id);
        $tab->delete();
        return redirect()->route('admin.baiviet')->with('success', 'Bài viết đã được xóa thành công!');
    }
}