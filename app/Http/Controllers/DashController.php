<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use Illuminate\Http\Request;

class DashController extends Controller
{
    //
    public function index()
    {
        $datakontak=Kontak::all();
        return view('dashboard')->with('kontak',$datakontak);
    }
    public function store()
    {
        $datakontak=new Kontak();
        $datakontak->nama;
        $datakontak->email;
        $datakontak->no;
        $datakontak->isi;
        $datakontak->save();;
        return redirect('/dashboard');
    }
}
