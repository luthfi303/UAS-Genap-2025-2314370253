@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Produk</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $kategori)
                            <option value="{{ $kategori->id }}" {{ old('category_id') == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="is_publish" value="1" class="form-check-input" id="publishCheck">
                    <label class="form-check-label" for="publishCheck">Publish</label>
                </div>

                <div class="mb-3">
                    <label for="published_at" class="form-label">Waktu Terbit</label>
                    <input type="datetime-local" name="published_at" id="published_at" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">← Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
