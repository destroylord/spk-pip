<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Skotga - Formulir Pendaftaran</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="text-center">
            <h1>Pendaftaran Siswa Baru</h1>
          </div>
          
          <h3>Identitas Peserta Didik</h3>
          <form action="#" method="POST">
            <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input"  value="L" type="radio" name=" id="">
                <label class="form-check-label" for="">
                  Laki-Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="P" type="radio" name="" >
                <label class="form-check-label" for="">
                  Perempuan
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="">Tempat Tanggal Lahir</label>
              <div class="row g-3">
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="City" aria-label="City">
                </div>
                <div class="col-sm">
                  <input type="date" class="form-control" placeholder="State" aria-label="State">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Open this select menu</option>
                <option value="1">Islam</option>
                <option value="2">Khatolik</option>
                <option value="3">Hindu</option>
                <option value="4">Budha</option>
                <option value="5">Konghucu</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Asal TK</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Alamat TK</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Alamat Siswa</label>
              <input type="text" placeholder="Jalan." class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kelurahan/Desa</label>
              <input type="text" placeholder="Jalan." class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kecamatan</label>
              <input type="text" placeholder="Jalan." class="form-control">
            </div>
            <div class="form-group">
              <label for="">Alamat Siswa</label>
              <input type="text" placeholder="Jalan." class="form-control">
            </div>
            <h3>Data Ayah Kandung</h3>
            <div class="form-group">
              <label>Nama Ayah</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Tempat Tanggal Lahir</label>
              <div class="row g-3">
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="City" aria-label="City">
                </div>
                <div class="col-sm">
                  <input type="date" class="form-control" placeholder="State" aria-label="State">
                </div>
              </div>
            </div>
            <h3>Data Ibu Kandung</h3>
            <div class="form-group">
              <label>Nama Ayah</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Tempat Tanggal Lahir</label>
              <div class="row g-3">
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="City" aria-label="City">
                </div>
                <div class="col-sm">
                  <input type="date" class="form-control" placeholder="State" aria-label="State">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>