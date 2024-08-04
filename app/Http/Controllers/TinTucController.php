<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTucAsm;

class TinTucController extends Controller
{
    public function index()
    {
        $tintuc = TinTucAsm::all();
        return view('tintuc.index', compact('tintuc'));
    }
}