<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Input Data</title>
</head>

  <body>

    <?php include("Skin/navbar-admin.html"); ?>
    
    <!-- <section>
      <nav class="navbar header-dimas">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand me-2 text-white" href="logout.html">
            <span class>Logout</span>
            <img class="me-2" src="Assets/logout.png" alt="" width="23" height="28" />
          </a>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <img src="Assets/Logo_Darussalam_Nav.png" alt="" class="m-auto pt-3 pb-2" />
            <div class="text-center m-2">
              <h5 class="offcanvas-title text-center" id="offcanvasNavbarLabel">Masjid Darussalam</h5>
            </div>
            <div class="offcanvas-body bg-primary">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                <li class="nav-item mb-1">
                  <a class="nav-link" href="index.php"><img src="Assets/home.png" alt="" width="26" height="24" class="d-inline-block align-text-left me-3" />Home</a>
                </li>
                <li class="nav-item mb-1">
                  <a class="nav-link" href="#"><img src="Assets/tentang.png" alt="" width="26" height="24" class="d-inline-block align-text-left me-3" />Tentang Kami</a>
                </li>
                <li class="nav-item mb-1">
                  <a class="nav-link" href="#"><img src="Assets/pengaturan.png" alt="" width="26" height="24" class="d-inline-block align-text-left me-3" />Pengaturan Akun</a>
                </li>
                <li class="nav-item mb-1">
                  <a class="nav-link" href="#"><img src="Assets/database.png" alt="" width="26" height="24" class="d-inline-block align-text-left me-3" />Database</a>
                </li>
                <li class="nav-item mb-1">
                  <a class="nav-link" href="#"><img src="Assets/input.png" alt="" width="26" height="24" class="d-inline-block align-text-left me-3" />Input Barang</a>
                </li>
                <li class="nav-item mb-1">
                  <a class="nav-link" href="#"><img src="Assets/pemeliharaan.png" alt="" width="26" height="24" class="d-inline-block align-text-left me-3" />Pemeliharaan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </section> -->

    <section>
      <div class="container card shadow p-5 mt-4">
        <form action="" method="post">
          <div class="row">
            <!-- Kode barang -->
            <div class="col">
              <label for="kode_barang">Kode Barang</label>
              <input type="text" class="form-control" name="kode_barang" />
            </div>
            <!-- Tanggal input -->
            <div class="col">
              <label for="tanggal_input">Tanggal Input</label>
              <input type="text" class="form-control" name="tanggal_input" disabled />
            </div>
          </div>
          <div class="row">
            <!-- Nama barang -->
            <div class="col">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" class="form-control" name="nama_barang" />
            </div>
            <!-- Masa pakai -->
            <div class="col">
              <label for="masa_pakai">Masa Pakai</label>
              <input type="number" class="form-control" name="masa_pakai" />
            </div>
            
          </div>
          <div class="row">
            <!-- Kuantitas -->
            <div class="col-md-6">
              <label for="kuantitas">Kuantitas</label>
              <input type="text" class="form-control" name="kuantitas" />
            </div>
            <!-- Pengingat -->
            <div class="col">
              <div class="row g-3 align-items-center mt-1">
                <div class="col-4">
                  <label for="pengingat" class="col-form-label">Sampaikan pengingat</label>
                </div>
                <div class="col-2">
                  <input type="number" id="pengingat" class="form-control">
                </div>
                <div class="col-6">
                  <span id="passwordHelpInline" class="form-text">
                    hari sebelum waktunya pemeliharaan
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Nama ruangan -->
            <div class="col-md-6">
              <label for="nama_ruangan">Nama Ruangan</label>
              <select class="form-select" name="nama_ruangan" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Ruangan A</option>
                <option value="2">Ruangan B</option>
                <option value="3">Ruangan C</option>
              </select>
            </div>
          </div>
          <div class="row">
            <!-- Kondisi -->
            <div class="col-md-6">
              <label for="kondisi_barang">Kondisi</label>
              <select class="form-select" name="kondisi_barang" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Kondisi A</option>
                <option value="2">Kondisi B</option>
                <option value="3">Kondisi C</option>
              </select>
            </div>
          </div>
          <div class="row">
            <!-- Sumber -->
            <div class="col-md-6">
              <label for="sumber">Sumber</label>
              <select class="form-select" name="sumber" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Sumber A</option>
                <option value="2">Sumber B</option>
                <option value="3">Sumber C</option>
              </select>
            </div>
          </div>

          <!-- Button -->
          <div class="row g-3 align-items-center mt-1">
            <div class="col-2">
              <button type="submit" class="btn btn-primary">Input Barang</button>
            </div>
            <div class="col-2">
              <button type="reset" class="btn btn-secondary">Batalkan</button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
