<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BinhLuan;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, $id_baiviet)
    {
        if (!Auth::check()) {
            // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login');
        }

        $comment = new BinhLuan();
        $comment->noi_dung = $request->comment_message;
        $comment->id_baiviet = $id_baiviet;
        $comment->user_id = Auth::id();
        $comment->save();


        return redirect()->back()->with('success', 'Bình luận của bạn đã được đăng.');
    }
}