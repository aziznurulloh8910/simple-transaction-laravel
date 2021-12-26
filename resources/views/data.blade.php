@extends('layouts.main')

@section('container')
  <div class="mt-4 col-md-12">
    <h1 class="h3 mb-3 fw-normal">Data Penjualan</h1>
    <a href="/penjualan" class="btn btn-sm btn-primary">Tambah <i class="bi bi-bag-plus"></i></a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Total</th>
          <th scope="col">Pembeli</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Diskon</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $d => $item)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->product_id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ rupiah($item->price) }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ rupiah($item->total) }}</td>
            <td>{{ $item->buyer_name }}</td>
            <td>{{ $item->created_at }}</td>
            @if ($item->total > 50000)
              <td>{{ rupiah($item->total - ($item->total) * 10/100) }}</td>
            @else
              <td>{{ rupiah($item->total) }}</td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection