@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tampil Daftar Kategori di report</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($result as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->nama}}</td>
                <td>{{$r->total}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection