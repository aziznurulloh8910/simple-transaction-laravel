<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">PT. Berkah Perkasa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "penjualan") ? 'active' : '' }}" href="/penjualan">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "data") ? 'active' : '' }}" href="/data">Data Penjualan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "product") ? 'active' : '' }}" href="/product">Data product</a>
        </li>
      </ul>
    </div>
  </div>
</nav>