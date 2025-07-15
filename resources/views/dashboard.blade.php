@extends('layouts.app')

@section('content')
<div class="container-fluid">

    
    <h1 class="h3 mb-4 text-gray-800">Dashboard Protan</h1>

    
    <div class="row">

        
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Produk</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $produkCount }}</div>
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary mt-2">Lihat Produk</a>
                </div>
            </div>
        </div>

        
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kategori</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kategoriCount }}</div>
                </div>
            </div>
        </div>

        
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kegiatan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kegiatanCount }}</div>
                    <a href="{{ route('kegiatans.index') }}" class="btn btn-sm btn-success mt-2">Lihat Kegiatan</a>
                </div>
            </div>
        </div>

    </div>

    
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">Daftar Kategori Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Dibuat Pada</th>
                            <th>Diperbarui</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $kategori)
                            <tr>
                                <td>{{ $kategori->id }}</td>
                                <td>{{ $kategori->name }}</td>
                                <td>{{ $kategori->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $kategori->updated_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
