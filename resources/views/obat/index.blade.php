@extends('layouts.admin')
@section('content')
<div class="card">
  <div class="container">
  <h2>Tabel Obat </h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Nama Kategori</th>
      </tr>
    </thead>
    <tbody>
        @foreach($dataObat as $d)
      <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->nama_obat}}</td>
        <td>{{ $d->stok }}</td>
        <td>{{ $d->harga }}</td>
        <td>{{$d ->nama }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection