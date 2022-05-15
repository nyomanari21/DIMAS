<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="Style/style.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <title>Input Data</title>
</head>

<body>

  <?php include("Skin/navbar-admin.html"); ?>

  <!-- Form Ruangan -->
  <section>
    <div class="container my-4">
      <form class="row" method="post" action="">
        <div class="col-lg-6">
          <!-- Kode Barang -->
          <div class="mb-3">
            <label for="kode_barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" nama="kode_barang">
          </div>
          <!-- Nama Barang -->
          <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" nama="nama_barang">
          </div>
          <!-- Kuantitas -->
          <div class="mb-3">
            <label for="kuantitas" class="form-label">Kuantitas</label>
            <input type="text" class="form-control" nama="kuantitas">
          </div>
          <!-- Kuantitas -->
          <div class="mb-3">
            <label for="kuantitas" class="form-label">Kuantitas</label>
            <input type="text" class="form-control" nama="kuantitas">
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Button -->
          <div class="row g-3 align-items-center mt-1">
            <div class="col-4">
              <button type="submit" class="btn btn-primary">Input Ruangan</button>
            </div>
            <div class="col-2">
              <button type="reset" class="btn btn-danger">Batalkan</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

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
            <button type="reset" class="btn btn-danger">Batalkan</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>