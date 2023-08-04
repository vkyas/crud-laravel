@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
    <a href="/produk" class="btn btn-success">Kembali</a>
</div>
<div class="col-lg-8">
    <form action="{{ route('produk.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Produk</label>
            <input type="text" name="nama" id="namaProduk" class="form-control" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="hrgProduk" class="form-label">Harga Produk</label>
            <input type="text" name="hrg" id="hrgProduk" class="form-control" value="{{ $data->hrg }}">
        </div>
        <div class="mb-3">
            <label for="jmlProduk" class="form-label">Jumlah Produk</label>
            <input type="text" name="jml" id="jmlProduk" class="form-control" value="{{ $data->jml }}">
        </div>
        <div class="mb-3">
            <label for="jmlProduk" class="form-label">keterangan</label>
            <input type="text" name="keterangan" id="jmlProduk" class="form-control" value="{{ $data->keterangan }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection