@extends('layouts.app')

@section('title', 'Tambah Kegiatan')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Kegiatan Remaja Masjid</h1>

    <a href="{{ route('kegiatans.index') }}" class="btn btn-secondary btn-sm mb-3">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi Kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li><i class="fas fa-exclamation-circle"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('kegiatans.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="judul">Judul Kegiatan</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>

                <div class="form-group mb-4">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Kegiatan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
