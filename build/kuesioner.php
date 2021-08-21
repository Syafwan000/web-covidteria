<?php 
session_start();
require '../config/functions.php';
if(isset($_POST['submit'])) {
    $_SESSION['submit'] = true;
    $_SESSION['nama'] = $_POST['nama'];
    userInput($_POST);
    header("Location: soal/soal_1.php");
}

if(isset($_SESSION['submit'])) {
    header("Location: soal/soal_1.php");
}

if(@$_SESSION['rendah2'] == "rendah02") {
    header("Location: hasil/resiko_rendah.php");
}

if(@$_SESSION['sedang2'] == "sedang02") {
    header("Location: hasil/resiko_sedang.php");
}

if(@$_SESSION['sedang2'] == "sedang02") {
    header("Location: hasil/resiko_tinggi.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styleKuesioner.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Kuesioner</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
  <div class="container justify-content-center navs ">
    <a class="navbar-brand" href="#"><span id="co1">Co</span>vidteria</a>
  </div>
</nav>
<section class="jumbo" id="jumbo">
    <div class="container">
        <div class="row">
             <div class="col-12 col-md-6">
                <h1>Kuesioner</h1>
                <h1 class="covid"><span id="co2">Co</span>vidteria</h1>
                <p>Silahkan untuk mengisi data diri anda</p>
                <p class="paragraf"><i><b>#PakaiMasker #Dirumahaja</b></i></p>
                <form method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Anda</label><br>
                        <input type="text" class="form-control" id="nama" maxlength="100" name="nama" autocomplete="off" placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label><br>
                        <input type="number" class="form-control" id="umur" maxlength="3" min="1" max="200" name="umur" autocomplete="off" placeholder="Masukkan umur anda" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input btn-check" type="radio" id="laki" value="Laki-Laki" name="jk" required="required">
                            <label class="form-check-label btn btn-outline-primary" for="laki"><i class="fas fa-male"></i>&nbsp;&nbsp;Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input btn-check" type="radio" id="perempuan" value="Perempuan" name="jk" required="required">
                            <label class="form-check-label btn btn-outline-danger" for="perempuan"><i class="fas fa-female"></i>&nbsp;&nbsp;Perempuan</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Mulai</button>
                    <a href="../index.php" class="btn btn-danger"><i class="fas fa-angle-double-left"></i>&nbsp;&nbsp;Kembali</a>
                </form>
             </div>
        <div class="col-6">
            <img src="../img/kuesioner_masker.png" width="500">
        </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>