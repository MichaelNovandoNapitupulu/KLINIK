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
                <h3 class="card-title">Periksa</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" class="form-control" placeholder="Input obat's name">
                    </div>
                    <div class="form-group">
                        <label>Kemasan</label>
                        <input type="text" class="form-control" placeholder="Input kemasan's name">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" placeholder="Input the price">
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
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
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
                        <tr>
                            <td>1</td>
                            <td>B001</td>
                            <td>Paracetamol</td>
                            <td>pil</td>
                            <td>15000</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>B002</td>
                            <td>Mixagrip</td>
                            <td>Pil</td>
                            <td>20000</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>B003</td>
                            <td>Promag</td>
                            <td>pil</td>
                            <td>50000</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
