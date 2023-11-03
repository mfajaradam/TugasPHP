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
            <h1>Bank Syari'ah</h1>
        </div>
            <!-- action untuk menujukan data yang mau dikirim  -->
    <form action="" method="post">
        <div class="mb-3">
            <label for="golongan" class="form-label">Golongan</label>
            <input type="text" class="form-control" id="golongan" name="golongan">
        </div>
        <div class="mb-3">
            <label for="jumlah anak" class="form-label">Jumlah anak</label>
            <input type="text" class="form-control" id="jumlah anak" name="jumlahAnak">
        </div>
        <div class="mb-3">
            <label for="jumlah lembur" class="form-label">Jumlah lembur</label>
            <input type="text" class="form-control" id="jumlah lembur" name="jumlahLembur">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>

    <?php
        if(isset($_POST["submit"])) {
            $golongan = $_POST["golongan"];
            $jumlahAnak = $_POST["jumlahAnak"];
            $jumlahLembur = $_POST["jumlahLembur"];

            if($golongan == 1) {
                $gajiPokok = 1700000;
                $tunjanganIstri = 300000;
                $tunjanganAnak = 100000;
                $lembur = 50000;
            } else if($golongan == 2) {
                $gajiPokok = 2000000;
                $tunjanganIstri = 500000;
                $tunjanganAnak = 150000;
                $lembur = 75000;
            } else if($golongan == 3) {
                $gajiPokok = 2500000;
                $tunjanganIstri = 750000;
                $tunjanganAnak = 200000;
                $lembur = 100000;
            }

            $gaji_kotor = $gajiPokok + $tunjanganIstri + ($jumlahAnak * $tunjanganAnak) +  ($jumlahLembur * $lembur);
            $pajak = $gaji_kotor * 0.05;
            $BPJS = 100000;
            $totalGaji = $gaji_kotor - $BPJS - $pajak;
    ?>

    <div class="container">
        <div class="card mx-auto" style="width: 40rem;">
            <div class="card-header p-4">
            </div>
            <div class="card-body">
                <p>======================================================</p>
                <p>Golongan : <?= $golongan; ?></p>
                <p>Gaji Pokok : Rp.<?= $gajiPokok; ?></p>
                <p>Tunjangan Istri : Rp.<?= $tunjanganIstri; ?></p>
                <p>Jumlah Anak : <?= $jumlahAnak; ?></p>
                <p>Tunjangan Anak : Rp.<?= $tunjanganAnak; ?></p>
                <p>Jumlah Jam Lembur : <?= $jumlahLembur; ?></p>
                <p>Lembur : Rp.<?= $lembur; ?></p>
                <p>------------------------------------------------------</p>
                <p>Gaji Kotor : <?= $gaji_kotor; ?></p>
                <p>------------------------------------------------------</p>
                <p>Potongan</p>
                <p>a.BPJS         : Rp.<?= $BPJS ?></p>
                <p>b.Pajak        : Rp.<?= $pajak ?></p>
                <p>======================================================</p>
                <p>Total Gaji     : Rp.<?= $totalGaji ?> </p>
                <p>======================================================</p>
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