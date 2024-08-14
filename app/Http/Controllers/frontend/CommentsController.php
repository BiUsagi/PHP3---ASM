<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BinhLuan;

class CommentsController extends Controller
{
    public function store(Request $request, $id_baiviet)
    {
        if (!Auth::check()) {
            // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login');
        }


        $validatedData = $request->validate([
            'comment_message' => 'required|string|max:500',
        ]);

        BinhLuan::create([
            'noi_dung' => $validatedData['comment_message'],
            'id_baiviet' => $id_baiviet,
            'user_id' => Auth::id(),
        ]);



        return back()->with('success', 'Bình luận của bạn đã được đăng.');
    }
}