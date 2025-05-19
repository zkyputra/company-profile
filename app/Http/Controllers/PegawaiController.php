<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
class PegawaiController extends Controller
{
    public function index()
    {
        $datapegawais=Pegawai::get();
        return view('pegawai.index')->with('datapegawais',$datapegawais);
        //
    }

    public function create()
    {
        return view('pegawai.create');
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|max:5|unique:pegawai,nip',
            'alamat'=>'required',
        ]);
        $datapegawai=new Pegawai();
        $datapegawai->nama=$request->nama;
        $datapegawai->nip=$request->nip;
        $datapegawai->alamat=$request->alamat;
        $datapegawai->save();;
        return redirect('/pegawai')->with('status','Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $datapegawai=Pegawai::find($id);
        return view('pegawai.edit')->with('datapegawai',$datapegawai);

        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|max:5',
            'alamat'=>'required',
        ]);
        $datapegawai=Pegawai::find($id);
        $datapegawai->nama=$request->nama;
        $datapegawai->nip=$request->nip;
        $datapegawai->alamat=$request->alamat;
        $datapegawai->save();
        return redirect('/pegawai')->with('status','Data Berhasil Diubah');
        //
    }


    public function destroy($id)
    {
        $datapegawai=Pegawai::find($id);
        $datapegawai->delete();
        return redirect('/pegawai')->with('status','Data Berhasil Dihapus');
        //
    }
}
