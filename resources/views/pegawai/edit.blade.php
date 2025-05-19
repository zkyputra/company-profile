@extends('layout.template')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Data Pegawai</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pegawai.update',$datapegawai->id) }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $datapegawai->nip }}"/>
                        @error('nip')
                            <div class="text-danger">{{ $message }}</div>

                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $datapegawai->nama }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $datapegawai->alamat }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
