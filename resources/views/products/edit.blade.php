@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $kategori)
                    <option value="{{ $kategori->id }}" {{ $kategori->id == $product->category_id ? 'selected' : '' }}>
                        {{ $kategori->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="is_publish" value="1" class="form-check-input" id="publishCheck"
                {{ $product->is_publish ? 'checked' : '' }}>
            <label class="form-check-label" for="publishCheck">Publish</label>
        </div>

        <div class="mb-3">
            <label>Waktu Terbit</label>
            <input type="datetime-local" name="published_at" class="form-control"
                   value="{{ $product->published_at ? date('Y-m-d\TH:i', strtotime($product->published_at)) : '' }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
