@extends('layouts.app')

@section('title', 'Riwayat Periksa')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pasien</h1>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat Periksa</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Periksa</th>
                            <th>Dokter</th>
                            <th>Tanggal Periksa</th>
                            <th>Catatan</th>
                            <th>Obat</th>
                            <th>Biaya Periksa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Q01</td>
                            <td>Test</td>
                            <td>26-07-2025</td>
                            <td>Perlu banyak makan</td>
                            <td>Obat penafsu makan</td>
                            <td>2100000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Q02</td>
                            <td>Arul</td>
                            <td>30-05-2025</td>
                            <td>Perlu banyak istirahat</td>
                            <td>obat tidur</td>
                            <td>350000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection