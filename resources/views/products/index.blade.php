@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Produk</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Tutup">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Publish</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $produk)
                            <tr>
                                <td>{{ $produk->name }}</td>
                                <td>{{ $produk->category->name ?? '-' }}</td>
                                <td>Rp{{ number_format($produk->price, 0, ',', '.') }}</td>
                                <td>
                                    @if ($produk->is_publish)
                                        <span class="badge bg-success">Ya</span>
                                    @else
                                        <span class="badge bg-secondary">Tidak</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', $produk->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $produk->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus produk?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if ($products->isEmpty())
                            <tr>
                                <td colspan="5" class="text-muted">Belum ada produk.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
