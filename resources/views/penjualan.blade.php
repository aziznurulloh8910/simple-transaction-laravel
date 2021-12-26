@extends('layouts.main')

@section('container')

  <div class="row justify-content-center">
    <div class="col-md-5 my-5">
      <h3 class="text-center mb-4">Penjualan</h3>

      <main class="form-signin">
        <form method="post" action="/data">
          <h3 class="mb-3 fw-normal">Form Pembelian</h3>  
          
          @csrf
          <div class="form-floating mb-3">
            <input type="" class="form-control" id="id" placeholder="Kode Barang" name="id">
            <label for="id">Kode Barang</label>
          </div>
          
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Pembelian" name="quantity">
            <label for="jumlah">Jumlah</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="pembeli" placeholder="Nama Pembelian" name="pembeli">
            <label for="pembeli">Nama Pembeli</label>
          </div>

          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="date" placeholder="Tanggal Pembelian" name="date">
            <label for="date">Tanggal</label>
          </div>

          <button class="w-100 btn btn-primary" type="submit">Beli <i class="bi bi-bag-plus"></i></button>
        </form>
      </main>

    </div>
  </div>
  
@endsection