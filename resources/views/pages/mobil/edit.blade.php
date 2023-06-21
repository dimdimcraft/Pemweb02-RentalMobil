@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Merk</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Merk</li>
            </ol>
            <a href="/mobil" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/mobil/update/{{ $mobilData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Merk Mobil</label>
                        <input type="text" class="form-control" name="nama_mobil" value="{{ $mobilData->nama_mobil }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="">CC</label>
                        <input type="text" class="form-control" name="cc" value="{{ $mobilData->cc }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Tahun Mobil</label>
                        <input type="text" class="form-control" name="tahun_mobil" value="{{ $mobilData->tahun_mobil }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" class="form-control" name="nomor_polisi"
                            value="{{ $mobilData->nomor_polisi }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Warna Mobil</label>
                        <input type="text" class="form-control" name="warna" value="{{ $mobilData->warna }}" required>
                    </div>

                    <div class="form-group">
                        <label for="">Foto Mobil</label>
                        <input type="file" class="form-control" name="foto" value="{{ $mobilData->foto }}" required>
                    </div>

                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Data Mobil</li>
            </ol>
            <a href="/mobil" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/mobil/update/{{ $mobilData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Mobil</label>
                        <input type="text" class="form-control" value="{{ $mobilData->nama_mobil }}" name="nama_mobil"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">CC</label>
                        <input type="text" class="form-control" value="{{ $mobilData->cc }}" name="cc" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Mobil</label>
                        <input type="text" class="form-control" value="{{ $mobilData->tahun_mobil }}" name="tahun_mobil"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" class="form-control" value="{{ $mobilData->nomor_polisi }}"
                            name="nomor_polisi" required>
                    </div>
                    <div class="form-group">
                        <label for="">Warna</label>
                        <input type="text" class="form-control" value="{{ $mobilData->warna }}" name="warna" required>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" value="{{ $mobilData->foto }}" name="foto" required>
                    </div>
                    </select>
            </div>
            <div class="form-group mt-3">
                <button class="form-control btn btn-primary" type="submit">Simpan</button>
            </div>
            </form>
        </div>
    </div>
@endsection
@endsection
