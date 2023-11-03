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
    <div class="container d-flex justify-content-center mb-5">
        <div class="card mt-5" style="width: 40rem;">
            <div class="card-header text-center">
                <h2>Menghitung Bangun Ruang</h2>
            </div>
            <div class="card-body ms-4">
                <p>1.Balok</p>
                <p>2.Tabung</p>
                <p>3.Bola</p>
                <p>4.Kubus</p>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="masukan angka" class="form-label">Masukan Angka :</label>
                        <div class="row">
                            <div class="col-8">
                            <input type="text" class="form-control" id="masukan angka" name="Angka"> 
                            </div>
                            <div class="col-4">
                            <button type="submit" class="btn btn-primary" name="submit">Proses</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        
            <?php  
                if(isset($_POST["submit"])) {
                    $angka = $_POST["Angka"];
                    switch($angka) {
                        case 1: 
                            echo '<div class="card-body">';
                            echo "<h2>Masukan Data</h2>";
                            echo "<h6>Balok</h6>";
                            echo '<form action="" method="post">';
                            echo 'Panjang : <input type="text" class="form-control" name="panjang">';
                            echo 'Lebar : <input type="text" class="form-control" name="lebar">';
                            echo 'Tinggi : <input type="text" class="form-control mb-4" name="tinggi">';
                            echo '<button type="submit" class="btn btn-primary" name="hitung">Hitung</button>';
                            echo '</form>';
                            echo '</div>';
                        break;

                        case 2:
                            echo '<div class="card-body">';
                            echo "<h2>Masukan Data</h2>";
                            echo "<h6>Tabung</h6>";
                            echo '<form action="" method="post">';
                            echo 'Lebar : <input type="text" class="form-control" name="jariTabung">';
                            echo 'Tinggi : <input type="text" class="form-control mb-4" name="tinggi_tabung">';
                            echo '<button type="submit" class="btn btn-primary" name="hitung2">Hitung</button>';
                            echo '</form>';
                            echo '</div>';
                        break;

                        case 3:
                            echo '<div class="card-body">';
                            echo "<h2>Masukan Data</h2>";
                            echo "<h6>Bola</h6>";
                            echo '<form action="" method="post">';
                            echo 'Lebar : <input type="text" class="form-control mb-4" name="jariBola">';
                            echo '<button type="submit" class="btn btn-primary" name="hitung3">Hitung</button>';
                            echo '</form>';
                            echo '</div>';
                        break;

                        case 4:
                            echo '<div class="card-body">';
                            echo "<h2>Masukan Data</h2>";
                            echo "<h6>Kubus</h6>";
                            echo '<form action="" method="post">';
                            echo 'Sisi : <input type="text" class="form-control mb-4" name="sisi">';
                            echo 'Rusuk : <input type="text" class="form-control mb-4" name="rusuk">';
                            echo '<button type="submit" class="btn btn-primary" name="hitung4">Hitung</button>';
                            echo '</form>';
                            echo '</div>';
                        break;
                    }
                }

                // Balok Pembuka
                if(isset($_POST["hitung"])) {
                    $panjangBalok = $_POST["panjang"];
                    $lebarBalok = $_POST["lebar"];
                    $tinggiBalok = $_POST["tinggi"];

                    $volumeBalok = $panjangBalok * $lebarBalok * $tinggiBalok;
                    $luaspermukaanBalok = 2 * ($panjangBalok * $lebarBalok + $panjangBalok * $tinggiBalok + $lebarBalok * $tinggiBalok);

                    echo '<div class="card-body">';
                    echo "<h2>Hasil Perhitungan Balok Dengan</h2>";
                    echo "<p>Panjang : $panjangBalok</p>";
                    echo "<p>Lebar : $lebarBalok</p>";
                    echo "<p>tinggi : $tinggiBalok</p>";
                    echo '</div>';

                    echo '<div class="card-footer">';
                    echo "<p>Volume : $volumeBalok cm<sup>3</sup></p>";
                    echo "<p>Luas Permukaan : $luaspermukaanBalok cm<sup>2</sup></p>";
                    echo '</div>';
                }
                // Balok Penutup

                // Tabung Pembuka
                if(isset($_POST["hitung2"])) {
                    $jariTabung = $_POST["jariTabung"];
                    $tinggiTabung = $_POST["tinggi_tabung"];

                    $piTabung = 3.14;
                    $pangkatTabung = 2;
                    $volumeTabung = $piTabung * $jariTabung ** $pangkatTabung * $tinggiTabung;
                    $luasPermukaanTabung = $pangkatTabung * $piTabung * $jariTabung * ($jariTabung + $tinggiTabung);
                    
                    echo '<div class="card-body">';
                    echo "<h2>Hasil Perhitungan Tabung Dengan</h2>";
                    echo "<p>Jari Jari : $jariTabung</p>";
                    echo "<p>Tinggi Tabung : $tinggiTabung</p>";
                    echo '</div>';

                    echo '<div class="card-footer">';
                    echo "<p>Volume : $volumeTabung cm<sup>3</sup></p>";
                    echo "<p>Luas Permukaan : $luasPermukaanTabung cm<sup>2</sup></p>";
                    echo '</div>';
                } 
                // Tabung Penutup

                // Bola Pembuka
                if(isset($_POST["hitung3"])) {
                    $jariBola = $_POST["jariBola"];

                    // perhitungan
                    $piBola = 3.14;
                    $pangkatBolaKubik = 3;
                    $pangkatBolaPersegi = 2;

                    $volumeBola = 0.75 * $piBola * $piBola * $jariBola ** $pangkatBolaKubik;
                    $luasPermukaanBola = 4 * $piBola * $jariBola ** $pangkatBolaPersegi;

                    // hasil
                    echo '<div class="card-body">';
                    echo "<h2>Hasil Perhitungan Bola Dengan</h2>";
                    echo "<p>Jari Jari : $jariBola</p>";
                    echo "<p>PI : $piBola</p>";
                    echo '</div>';

                    echo '<div class="card-footer">';
                    echo "<p>Volume : $volumeBola cm<sup>3</sup></p>";
                    echo "<p>Luas Permukaan : $luasPermukaanBola cm<sup>2</sup></p>";
                    echo '</div>';
                }
                // Bola Penutup

                // Kubus Pembuka
                if(isset($_POST["hitung4"])) {
                    $sisi = $_POST["sisi"];
                    $rusuk = $_POST["rusuk"];

                    // Perhitungan
                    $pangkatKubusKubik = 3;
                    $pangkatKubusPersegi = 2;

                    $volumeKubusSisi = $sisi ** $pangkatKubusKubik;
                    $volumeKubusRusuk = $rusuk ** $pangkatKubusKubik;
                    $luasPermukaanKubus = 6 * ($sisi ** $pangkatKubusPersegi);

                    // hasil
                    echo '<div class="card-body">';
                    echo "<h2>Hasil Perhitungan Kubus Dengan</h2>";
                    echo "<p>Sisi : $sisi</p>";
                    echo "<p>Rusuk : $rusuk</p>";
                    echo '</div>';

                    echo '<div class="card-footer">';
                    echo "<p>Volume : $volumeKubusSisi cm<sup>3</sup></p>";
                    echo "<p>Volume : $volumeKubusRusuk cm<sup>3</sup></p>";
                    echo "<p>Luas Permukaan : $luasPermukaanKubus cm<sup>2</sup></p>";
                    echo '</div>';
                }
                // Kubus Penutup
            ?>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>