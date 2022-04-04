@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Obat dengan stok paling sedikit</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Nama Obat</td>
                <td>{{$data[0]->nama_obat}}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>{{$data[0]->harga}}</td>
            </tr>
            <tr>
                <td>Stok Obat</td>
                <td>{{$data[0]->stok}}</td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  @endsection