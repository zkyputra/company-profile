<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return $data=[];
    }
    public function getdata() {
        $data = Pegawai::get();
        return response()->json($data);
    }
    public function getdataid(Request $request) {
        $data = Pegawai::find($request->id);
        return response()->json($data);
    }
    //
}
