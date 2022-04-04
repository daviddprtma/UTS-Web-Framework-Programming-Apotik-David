@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Obat Per Kategori</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Obat</th>
                <th>Stok</th>
                <th>Harga</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->nama_obat}}</td>
                <td>{{$d->stok}}</td>
                <td>{{$d->harga}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
