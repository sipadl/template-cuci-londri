<div class="p-3 mb-2 nav-primary">
    <div class="d-flex justify-content-between">
        <div class="logo d-flex">
            <img src="https://placeimg.com/30/30/arch" alt="" class="thubmnail" height="30" width="30" style="border-radius: 4px">
            <div class="d-flex p-1">
                <a href="{{ url('user/suplier') }}" class="mx-2 nav-item">Suplier</a>
                <a href="{{ url('user/service') }}" class="mx-2 nav-item">Service</a>
                <a href="{{ url('user/stok') }}" class="mx-2 nav-item">Stok</a>
                <a href="" class="mx-2 nav-item">Kemitraan</a>
                <a href="{{ url('user/transaction') }}" class="mx-2 nav-item">Transaksi</a>
                <a href="{{ url('user/laporan') }}" class="mx-2 nav-item">Laporan</a>
            </div>
        </div>
        <div class="text">
            <div class="dropdown">
                <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  User
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="{{ url('user') }}">Dashboard</a></li>
                  <li><a class="dropdown-item" href="#">Pengaturan User</a></li>
                  <li><a class="dropdown-item" href="#">Ubah Info</a></li>
                  <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
              </div>
        </div>
    </div>
</div>
{{-- </nav> --}}