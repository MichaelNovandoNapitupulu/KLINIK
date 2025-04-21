@extends('layouts.app')

@section('title', 'Page Obat')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dokter</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">

        <!-- Form Tambah Obat -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Tambah Obat</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('dokter.obat.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" placeholder="Input nama obat" required>
                    </div>
                    <div class="form-group">
                        <label>Kemasan</label>
                        <input type="text" name="kemasan" class="form-control" placeholder="Input kemasan" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Input harga" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Obat</button>
                </form>
            </div>
        </div>

        <!-- List Obat -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Obat</h3>
                <div class="card-tools">
                    <form action="{{ route('dokter.obat.index') }}" method="GET">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Obat</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($obats as $index => $obat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $obat->id }}</td>
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->kemasan }}</td>
                            <td>{{ number_format($obat->harga, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('dokter.obat.edit', $obat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('dokter.obat.destroy', $obat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data obat.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
