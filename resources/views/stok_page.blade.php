@extends('layout_master')

@include('navbar')

@section('title', 'Stok Barang')
@section('header', 'Stok Barang')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">ID Supplier</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($barang as $brg)
    <tr>
      <th scope="row">{{ $brg->id }}</th>
      <td>{{ $brg->nama_barang }}</td>
      <td>{{ $brg->stok }}</td>
      <td>{{ "Rp " .number_format($brg->harga, 2, ',', '.') }}</td>
      <td>{{ $brg->id_supplier }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection


