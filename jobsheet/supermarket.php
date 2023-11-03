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
            <h1>BIG SUPER</h1>
        </div>
            <!-- action untuk menujukan data yang mau dikirim  -->
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama barang" name="namaBarang">
        </div>
        <div class="mb-3">
            <label for="harga barang" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" id="harga barang" name="hargaBarang">
        </div>
        <div class="mb-3">
            <label for="jumlah barang" class="form-label">Jumlah Barang</label>
            <input type="text" class="form-control" id="jumlah barang" name="jumlahBarang">
        </div>
        <div class="mb-3">
            <label for="uang" class="form-label">Uang yang dimiliki</label>
            <input type="text" class="form-control" id="uang" name="uang">
        </div>
        <div class="mb-3">
            <label for="bulan" class="form-label">Bulan ke</label>
            <input type="text" class="form-control" id="bulan" name="bulan">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <hr>
    </div>
    <!-- kalo action tidak di isi, data dari form akan mengirimkan ke halaman ini -->
    <!-- isset fungsinya melakukan sesuatu yang kita belum belum jumpai,lebih rinci seperti ini contoh dibawah "apakah submit pernah diklik" -->
    <?php if (isset($_POST['submit'])) {

    
    // Mengambil nilai dari form
    
    $namaBarang = $_POST['namaBarang'];
    $hargaBarang = $_POST['hargaBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];
    $Uang = $_POST["uang"];
    $Bulan = $_POST["bulan"]; 

    // Menghitung total harga
    $totalHarga = $hargaBarang * $jumlahBarang;

    // menghitung pajak
    $pajak = 0.1;
    $totalPajak = $totalHarga * $pajak;
    $hasil1 = $Uang - $totalPajak;

    // Menghitung diskon 5%
    $diskon = $totalHarga * 0.2;

    // Mengurangkan diskon dari total harga
    $totalHargaSetelahDiskon = $totalHarga - $diskon;

    $totalHargaSetelahKenakanPajak = $totalHargaSetelahDiskon * $pajak;
    $hasil = $Uang - $totalHargaSetelahKenakanPajak;
    

    echo '<div class="container">';
    switch ($Bulan) {
        case 1:
            if($jumlahBarang >= 5) {
                echo "<h1>Jumlah yang harus dibayarkan</h1>";
                echo "<p>Nama Barang: $namaBarang </p>";
                echo "<p>Harga Barang: $hargaBarang </p>";
                echo "<p>Jumlah Barang: $jumlahBarang </p>";
                echo "<p>Uang yang dimiliki : $Uang</p>";
                echo "<p>Diskon 20%</p>";
                echo "<p>Pajak 10%</p>";
                echo "<h2>Rp.$totalHargaSetelahDiskon</h2>";
                echo "<h2>Total : Rp.$hasil</h2>";
            } else {
                echo "<h1>Jumlah yang harus dibayarkan</h1>";
                echo "<p>Nama Barang: $namaBarang </p>";
                echo "<p>Harga Barang: $hargaBarang </p>";
                echo "<p>Jumlah Barang: $jumlahBarang </p>";
                echo "<p>Uang yang dimiliki : $Uang</p>";
                echo "<p>Pajak 10%</p>";
                echo "<h2>Total : Rp.$hasil1</h2>";
            }
            break;

        case 12:
            if($jumlahBarang >= 5) {
                echo "<h1>Jumlah yang harus dibayarkan</h1>";
                echo "<p>Nama Barang: $namaBarang </p>";
                echo "<p>Harga Barang: $hargaBarang </p>";
                echo "<p>Jumlah Barang: $jumlahBarang </p>";
                echo "<p>Uang yang dimiliki : $Uang</p>";
                echo "<p>Diskon 20%</p>";
                echo "<p>Pajak 10%</p>";
                echo "<h2>Rp.$totalHargaSetelahDiskon</h2>";
                echo "<h2>Total : Rp.$hasil</h2>";
            } else {
                echo "<h1>Jumlah yang harus dibayarkan</h1>";
                echo "<p>Nama Barang: $namaBarang </p>";
                echo "<p>Harga Barang: $hargaBarang </p>";
                echo "<p>Jumlah Barang: $jumlahBarang </p>";
                echo "<p>Uang yang dimiliki : $Uang</p>";
                echo "<p>Pajak 10%</p>";
                echo "<h2>Total : Rp.$hasil1</h2>";
            }
            break;
        
        default:
        if($jumlahBarang) {
            echo "<h1>Jumlah yang harus dibayarkan</h1>";
            echo "<p>Nama Barang: $namaBarang </p>";
            echo "<p>Harga Barang: $hargaBarang </p>";
            echo "<p>Jumlah Barang: $jumlahBarang </p>";
            echo "<p>Uang yang dimiliki : $Uang</p>";
            echo "<p>Pajak 10%</p>";
            echo "<h2>Total : Rp.$hasil1</h2>";
        }
            break;
    }

}

    echo '<div>'
    ?>
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