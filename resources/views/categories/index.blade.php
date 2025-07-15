@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kategori</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">+ Tambah Kategori</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $kategori)
                <tr>
                    <td>{{ $kategori->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $kategori->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @e
