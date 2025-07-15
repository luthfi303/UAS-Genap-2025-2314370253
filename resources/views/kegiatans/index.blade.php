@extends('layouts.app')

@section('title', 'Daftar Kegiatan')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Kegiatan Remaja Masjid</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('kegiatans.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Kegiatan
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatans as $kegiatan)
                            <tr>
                                <td>{{ $kegiatan->judul }}</td>
                                <td>{{ $kegiatan->deskripsi }}</td>
                                <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d-m-Y') }}</td>
                                <td>{{ $kegiatan->lokasi }}</td>
                                <td>
                                    <a href="{{ route('kegiatans.edit', $kegiatan->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('kegiatans.destroy', $kegiatan->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin ingin menghapus kegiatan ini?')" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if ($kegiatans->isEmpty())
                            <tr>
                                <td colspan="5" class="text-muted">Belum ada kegiatan.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
