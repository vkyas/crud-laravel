@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Produk Detail</h1>
    <a href="/produk" class="btn btn-success">Kembali<span data-feather="arrow-left"></span></a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <tbody>
            <tr>
                <td>No.</td>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{ $data->nama }}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>{{ $data->hrg}}</td>
            </tr>
            <tr>
                <td>Jml Stok</td>
                <td>{{ $data->jml }}</td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td>{{ $data->keterangan }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection