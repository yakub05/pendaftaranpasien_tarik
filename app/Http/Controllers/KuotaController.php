<?php

namespace App\Http\Controllers;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KuotaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $polis=Poli::get();
        return view('layouts/kuotapasien', compact('polis'));
    }
}
