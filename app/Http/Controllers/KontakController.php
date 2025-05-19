<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
class KontakController extends Controller
{
    //
    public function index()
    {
        $datakontak=Kontak::all();
        return view('kontak.index')->with('kontak',$datakontak);
    }
}
