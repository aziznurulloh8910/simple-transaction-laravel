@extends('layouts.main')

@section('container')
  <div class="row my-4">
    <div class="col-md-8">
      <h1 class="h3 mb-3 fw-normal">Keranjang Pembelian</h1>
      <p>transaction detail</p>

      {{-- table transaction --}}
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $d => $item)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item->name}}</td>
              <td>{{ rupiah($item->price) }}</td>
              <td>{{ $item->quantity }}</td>
              <td>{{ rupiah($item->subtotal) }}</td>
            </tr>
          @endforeach

        </tbody>
      </table>

      {{-- Check Out  --}}
      <div class="card">
        <main class="form-signin m-4">
          <h5 class="card-title">Form Checkout</h5>
          <form action="/transaction/index">

            <div class="row g-4 align-items-center mb-2">
              <div class="col-md-3">
                <label for="nama-pembeli" class="col-form-label">Nama Pembeli</label>
              </div>
              <div class="col-md-9">
                <input type="text" id="nama-pembeli" name="nama-pembeli" placeholder="Nama Pembeli" class="form-control">
              </div>
            </div>

            <div class="row g-4 align-items-center mb-2">
              <div class="col-md-3">
                <label for="tanggal" class="col-form-label">Tanggal Transaksi</label>
              </div>
              <div class="col-md-9">
                <input type="text" id="tanggal" name="tanggal" placeholder="Tanggal Transaksi" class="form-control">
              </div>
            </div>
            
            <div class="row g-4 align-items-center mb-2">
              <label for="total" class="col-form-label">Diskon 10% Untuk Pembayaran di atas Rp. 50.000</label>
            </div>

            <div class="row g-4 align-items-center mb-2">
              <div class="col-md-3">
                <label for="total" class="col-form-label">Total Pembayaran</label>
              </div>
              <div class="col-md-9">
                <input type="text" id="total" name="total" placeholder="Total Pembayaran" class="form-control">
              </div>
            </div>
            
            <button class="btn btn-success mt-4" type="submit">Check-Out <i class="bi bi-bag-check"></i></i></button>
          </form>
        </main>
      </div>
      
    </div>

    {{-- form transaksi --}}
    <div class="col-md-4">
      <div class="row justify-content-center">
          
          <main class="form-signin">
            <form method="post" action="/transaction/index">
              <h1 class="h3 mb-3 fw-normal">Form Pembelian</h1>
    
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="id" placeholder="Kode Barang" name="id">
                <label for="id">Kode Barang</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="id" placeholder="Nama Barang" name="name">
                <label for="id">Nama Barang</label>
              </div>
    
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" placeholder="Harga Barang" name="price">
                <label for="nama">Harga Barang</label>
              </div>
    
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Pembelian" name="quantity">
                <label for="jumlah">Jumlah Pembelian</label>
              </div>
              
              <button class="w-100 btn btn-primary" type="submit">Keranjang <i class="bi bi-bag-plus"></i></button>
            </form>
          </main>
    
        </div>
      </div>
    </div>
  </div>
@endsection