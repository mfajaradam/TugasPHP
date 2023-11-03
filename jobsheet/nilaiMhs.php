<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
        <div class="judul text-center">
            <h1>Nilai Mahasiswa</h1>
        </div>
            <!-- action untuk menujukan data yang mau dikirim  -->
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
        <div class="mb-3">
            <label for="nilai Absen" class="form-label">Nilai Absensi</label>
            <input type="text" class="form-control" id="nilai Absen" name="nilaiAbsen">
        </div>
        <div class="mb-3">
            <label for="nilai tugas" class="form-label">Nilai Tugas</label>
            <input type="text" class="form-control" id="nilai tugas" name="nilaiTugas">
        </div>
        <div class="mb-3">
            <label for="nilai uts" class="form-label">Nilai UTS</label>
            <input type="text" class="form-control" id="nilai uts" name="nilaiUts">
        </div>
        <div class="mb-3">
            <label for="nilai uas" class="form-label">Nilai UAS</label>
            <input type="text" class="form-control" id="nilai uas" name="nilaiUas">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>

    <?php
        if(isset($_POST["submit"])) {
            $nama = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $absen = $_POST["nilaiAbsen"];
            $nilaiTugas = $_POST["nilaiTugas"];
            $nilaiUTS = $_POST["nilaiUts"];
            $nilaiUAS = $_POST["nilaiUas"];

            $Absensi = $absen * 0.2;
            $tugas = $nilaiTugas * 0.25;
            $UTS = $nilaiUTS * 0.2;
            $UAS = $nilaiUAS * 0.35;

            $total = $Absensi + $tugas + $UTS + $UAS;
        
    ?>

    <div class="container">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-header">
            </div>
            <div class="card-body">
                <p>Nama          : <?= $nama; ?></p>
                <p>Kelas         : <?= $kelas; ?></p>
                <p>Nilai Absensi : <?= $Absensi; ?></p>
                <p>Nilai Tugas   : <?= $nilaiTugas; ?></p>
                <p>Nilai UTS     : <?= $nilaiUTS; ?></p>
                <p>Nilai UAS     : <?= $nilaiUAS; ?></p>
            </div>
            <div class="card-footer">
                <p>Skor : <?= $total; ?></p>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>