@extends('layouts.main')

@section('container')
  <div class="col my-5">
    <h1 class="h3 mb-3 fw-normal">Data Barang</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td scope="row">{{ $loop->iteration }}</td>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection