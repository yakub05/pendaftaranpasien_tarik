<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syaratketentuan;
use Illuminate\Routing\Controller;

class ShowsyaratController extends Controller
{
    public function index(Request $request)
    {
        $syarat=Syaratketentuan::get();
        return view('layouts/syaratketentuan', compact('syarat'));
    }
}

