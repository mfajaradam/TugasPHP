<?php
    // include "data.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PENILAIAN</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Form Data Nilai</h1>
        <form method="post">
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama">
        </div>
        <div class="mb-3">
            <label for="Kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" name="Kelas">
        </div>
        <div class="mb-3">
            <label for="Matpel" class="form-label">Nilai Pelajaran Umum</label>
            <input type="text" class="form-control" name="NilaiUmum">
        </div>
        <div class="mb-3">
            <label for="Nilai" class="form-label">Nilai Pelajaran Produktif</label>
            <input type="text" class="form-control" name="NilaiProduktif">
        </div>
        <div class="mb-3">
            <label for="Nilai" class="form-label">Nilai Pelajaran BMW</label>
            <input type="text" class="form-control" name="bmw">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <?php
        if(isset($_POST["submit"])) {
            $nama = $_POST["Nama"];
            $kelas = $_POST["Kelas"];
            $nilai_U = $_POST["NilaiUmum"];
            $nilai_P = $_POST["NilaiProduktif"];
            $bmw = $_POST["bmw"];
    
            if($nilai_U > 90) {
                $gradeU = "A";
                $ketU = "Lulus";
            } else if($nilai_U <= 90 && $nilai_U >= 80) {
                $gradeU = "B";
                $ketU = "Lulus";
            } else if($nilai_U <= 80 && $nilai_U >= 70) {
                $gradeU = "C";
                $ketU = "Lulus";
            } else if($nilai_U <= 70 && $nilai_U >= 60) {
                $gradeU = "D";
                $ketU = "Tidak Lulus";
            } else if($nilai_U < 60) {
                $gradeU = "F";
                $ketU = "Tidak Lulus";
            }

            if($nilai_P > 90) {
                $gradeP = "A";
                $ketP = "Lulus";
            } else if($nilai_P <= 90 && $nilai_P >= 80) {
                $gradeP = "B";
                $ketP = "Lulus";
            } else if($nilai_P <= 80 && $nilai_P >= 70) {
                $gradeP = "C";
                $ketP = "Lulus";
            } else if($nilai_P <= 70 && $nilai_P >= 60) {
                $gradeP = "D";
                $ketP = "Tidak Lulus";
            } else if($nilai_P < 60) {
                $gradeP = "F";
                $ketP = "Tidak Lulus";
            }

            if($bmw > 90) {
                $gradeM = "A";
                $ketM = "Lulus";
            } else if($bmw <= 90 && $bmw >= 80) {
                $gradeM = "B";
                $ketM = "Lulus";
            } else if($bmw <= 80 && $bmw >= 70) {
                $gradeM = "C";
                $ketM = "Lulus";
            } else if($bmw <= 70 && $bmw >= 60) {
                $gradeM = "D";
                $ketM = "Tidak Lulus";
            } else if($bmw < 60) {
                $gradeM = "F";
                $ketM = "Tidak Lulus";
            }

            $rata_rata = ($nilai_P + $nilai_U + $bmw) / 3;
        
    ?>

    <div class="container d-flex justify-content-center mb-5">
        <div class="card mt-5" style="width: 40rem;">
            <div class="card-header">
                <h3>Nama : <?= $nama; ?></h3>
                <h3>Kelas : <?= $kelas; ?></h3>
            </div>
            <div class="card-body">
                <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Matpel</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                    <tr>
                        <td class="col">1</td>
                        <td>Umum</td>
                        <td><?= $nilai_U ?></td>
                        <td><?= $gradeU ?></td>
                        <td><?= $ketU ?></td>
                    </tr>
                    <tr>
                        <td class="col">2</td>
                        <td>Produktif</td>
                        <td><?= $nilai_P ?></td>
                        <td><?= $gradeP ?></td>
                        <td><?= $ketP ?></td>
                    </tr>
                    <tr>
                        <td class="col">3</td>
                        <td>BMW</td>
                        <td><?= $bmw ?></td>
                        <td><?= $gradeM ?></td>
                        <td><?= $ketM ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" >Nilai rata rata</td>
                        <td><?= $rata_rata; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php }  ?>




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