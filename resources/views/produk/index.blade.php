@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Produk</h1>
</div>
<div class="table-responsive m-3">
    <a href="/produk/create" class="btn btn-primary mb-3">Tambah Data<i class="bi bi-plus-circle"></i></a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $rec)
            <tr>
                <td>{{ $rec->id }}</td>
                <td>{{ $rec->nama }}</td>
                <td>{{ $rec->hrg }}</td>
                <td>{{ $rec->jml }}</td>
                <td>{{ $rec->keterangan }}</td>
                <td>
                    <a href="/produk/{{$rec->id}}" class="badge bg-info">
                        <i class="bi ">detail</i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('produk.edit', $rec->id) }}">
                        <i class="bi bi-pencil-square">edit</i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('produk.destroy', $rec->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge bg-danger">del</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection