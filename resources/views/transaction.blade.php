@extends('layouts.main')

@section('container')
  <div class="row my-4">
    <div class="col-md-7">
      <h1 class="h3 mb-3 fw-normal">Keranjang Pembelian</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Nama Pembeli</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>TV Polytron</td>
            <td>2</td>
            <td>50.000</td>
            <td>100.000</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>TV Polytron</td>
            <td>2</td>
            <td>50.000</td>
            <td>100.000</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>TV Polytron</td>
            <td>2</td>
            <td>50.000</td>
            <td>100.000</td>
          </tr>
        </tbody>
      </table>

      {{-- <h3 class="h5 fw-normal mt-2">Total Bayar : Rp. 600.000</h3> --}}
      
    </div>

    <div class="col-md-5">
      <div class="row justify-content-center">
          
          <main class="form-signin">
            <form method="post" action="/transaction">
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
                <input type="date" class="form-control" id="tanggal" name="date">
                <label for="tanggal">Tanggal Pembelian</label>
              </div>
    
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Pembelian" name="quantity">
                <label for="jumlah">Jumlah Pembelian</label>
              </div>
              
              <button class="w-100 btn btn-primary" type="submit">Keranjang <i class="bi bi-bag-plus"></i></button>
              <button class="w-100 btn btn-success mt-2" type="submit">Check-Out <i class="bi bi-bag-check-fill"></i></i></button>
            </form>
          </main>
    
        </div>
      </div>
    </div>
  </div>
@endsection