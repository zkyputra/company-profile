@extends('layout.template')
@section('content')
<br>
@if (!empty(Session::get('status')))
    <div class="alert alert-success">
        {{ Session::get('status') }}
    </div>
    @endif

<a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table table-light">
        <thead>
            <tr>

                <th>Nip</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapegawais as $datapegawai)
                <tr>
                    <td>{{ $datapegawai->nip }}</td>
                    <td>{{ $datapegawai->nama }}</td>
                    <td>{{ $datapegawai->alamat }}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', $datapegawai->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pegawai.destroy', $datapegawai->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
@endsection
