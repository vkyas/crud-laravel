@extends('layouts.main')
@section('container')

<h1 class="mb-0">Tambah Produk</h1>
<hr />
<form action="{{ route('produk.store') }}" method="POST">
  @csrf
  <div class="row mb-3">
    <div class="col">
      <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
    </div>
    <div class="col">
      <input type="text" name="hrg" class="form-control" placeholder="Harga Produk">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <input type="text" name="jml" class="form-control" placeholder="Jumlah">
    </div>
    <div class="col">
        <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
    </div>
  </div>
  <div class="row">
    <div class="d-grid">
      <button class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection