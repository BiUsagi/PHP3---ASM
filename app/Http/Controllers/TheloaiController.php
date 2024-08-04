<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;

class TheloaiController extends Controller
{
    public function index()
    {
        $theloai = Theloai::all();
        return view('theloai.index', compact('theloai'));
    }

}