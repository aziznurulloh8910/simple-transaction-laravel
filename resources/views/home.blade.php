@extends('layouts.main')

@section('container')
  <div class="row my-4 justify-content-center">
    <div class="col-md-5">
      <center><img src="/img/account.png" alt="admin" width="150" height="150" class="mb-4"></center>
      <div class="card">
        <div class="card-header">
          Selamat Datang
        </div>
        <div class="card-body">
          <h5 class="card-title">Sistem Penjualan Barang PT. Berkah Perkasa</h5>
          <p class="card-text">Klik tombol di bawah ini untuk menuju ke halaman transaksi Penjualan Barang PT. Berkah Perkasa</p>
          <a href="/transaction" class="btn btn-primary">Mulai</a>
        </div>
      </div>

    </div>
  </div>
  <div class="row my-5">
  </div>
  <div class="row my-5">
  </div>
@endsection