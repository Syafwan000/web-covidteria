<?php 
session_start();
require 'config/covid.php';
require 'config/functions.php';
$data = statikCovid("https://coronavirus-19-api.herokuapp.com/countries/indonesia");
if(isset($_SESSION['submit'])) {
    header("Location: build/soal/soal_1.php");
}

$id = @$_SESSION['idAwal'];
$_SESSION['awal'] = true;

if(@$_SESSION['rendah'] == "rendah01") {
    deleteDataSoal("DELETE FROM tb_soal WHERE id_user = '$id'");
    deleteDataUser("DELETE FROM tb_user WHERE id = '$id'");
    $_SESSION = [];
    session_unset();
    session_destroy();
}

if(@$_SESSION['sedang'] == "sedang01") {
    deleteDataSoal("DELETE FROM tb_soal WHERE id_user = '$id'");
    deleteDataUser("DELETE FROM tb_user WHERE id = '$id'");
    $_SESSION = [];
    session_unset();
    session_destroy();
}

if(@$_SESSION['tinggi'] == "tinggi01") {
    deleteDataSoal("DELETE FROM tb_soal WHERE id_user = '$id'");
    deleteDataUser("DELETE FROM tb_user WHERE id = '$id'");
    $_SESSION = [];
    session_unset();
    session_destroy();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styleIndex.css?v=<?php echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Covidteria</title>
</head>
<body>
<div class="scrollUp" onclick="scrollToUp();"></div>
<nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
  <div class="container navs">
    <a class="navbar-brand" href="#"><span id="co1">Co</span>vidteria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav ms-auto text-center">
        <li class="nav-item">
          <a class="nav-link active" href="#"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;Kuesioner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#panduan"><i class="fas fa-book"></i>&nbsp;&nbsp;Panduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#data"><i class="fas fa-chart-bar"></i>&nbsp;&nbsp;Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#pengembang"><i class="fas fa-user-cog"></i>&nbsp;&nbsp;Pengembang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="jumbo" id="jumbo">
    <div class="container">
        <div class="row">
             <div class="col-12 col-md-6">
                <h1>Halo!</h1>
                <h1>Selamat Datang di</h1>
                <h1 class="covid"><span id="co2">Co</span>vidteria</h1>
                <p>Marilah bersatu untuk memutus</p>
                <p class="paragraf">mata rantai penyebaran Covid-19</p>
                <p class="paragraf">dengan mematuhi protokol kesehatan</p>
                <p class="paragraf"><i><b>#PakaiMasker #Dirumahaja</b></i></p>
                <a class="btn" role="button" href="build/kuesioner.php">Mulai Kuesioner&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
             </div>
        <div class="col-6">
            <img src="img/masker.png" width="400">
        </div>
        </div>
    </div>
</section>
<section class="panduan" id="panduan">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h3 class="text-center"><span id="pandu">Panduan</span> Mematuhi Protokol Kesehatan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 description description-1">
                <img src="img/pakai_masker.png" class="image">
                <h2>01</h2>
                <h4>Pakai Masker</h4>
                <p>Selalu menggunakan masker ketika berpergian</p>
            </div>
            <div class="col-md-6 description description-2">
                <img src="img/cuci_tangan.png" class="image">
                <h2>02</h2>
                <h4>Mencuci Tangan</h4>
                <p>Selalu mencuci tangan dengan sabun</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 description description-3">
                <img src="img/hand_sanitizer.png" class="image">
                <h2>03</h2>
                <h4>Membawa Handsanitizer</h4>
                <p>Selalu membawa handsanitizer ketika berpergian</p>
            </div>
            <div class="col-md-6 description description-4 mr-md-auto">
                <img src="img/social_distancing.png" class="image">
                <h2>04</h2>
                <h4>Menjaga Jarak</h4>
                <p>Selalu menjaga jarak dan menghindari kerumunan orang</p>
            </div>
        </div>
    </div>
</section>
<section class="data text-center" id="data">
    <div class="container-fluid text-center">
        <div class="row">
                <h3 class="text-center statis"><span id="data">Data</span> Covid-19 di Indonesia</h3>
            <div class="col-md-4" style="background-color: #fd7e14;">
                <h4>Positif</h4>
                <i class="fas fa-frown-open"></i>
                <p><?= number_format($data["cases"]); ?></p>
            </div>
            <div class="col-md-4 bg-danger">
                <h4>Meninggal</h4>
                <i class="fas fa-dizzy"></i>
                <p><?= number_format($data["deaths"]); ?></p>
            </div>
            <div class="col-md-4 bg-success">
                <h4>Sembuh</h4>
                <i class="fas fa-smile-beam"></i>
                <p><?= number_format($data["recovered"]); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="pengembang text-center" id="pengembang">
    <div class="container">
        <div class="row">
            <h3 class="text-center dev"><span id="develop">Pengembang</span> Website</h3>
            <div class="col-md-12">
                <i class="fas fa-user-cog"></i>
                <h4>ShaWann</h4>
                <p>(Muhammad Syafwan Ardiansyah)</p>
            </div>
        </div>
    </div>
</section>
<footer class="text-center">
    <h4><i class="far fa-copyright"></i>&nbsp;ShaWann</h4>
    <p>Dibuat dengan&nbsp;<i class="fas fa-heart"></i></p>
    <a href="https://www.instagram.com/safvvan_/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://github.com/Syafwan000" target="_blank"><i class="fab fa-github"></i></a>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            var scroll = document.querySelector('.scrollUp');
            scroll.classList.toggle("active" , window.scrollY > 500)
        })

        function scrollToUp(){
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        }
    </script>
</body>
</html>
