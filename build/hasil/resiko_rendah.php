<?php 
session_start();
require '../../config/functions.php';
$id = $_GET['id'];
$dataUser = queryUser("SELECT * FROM tb_user WHERE id = '$id'");

if(isset($_POST['submit_rendah'])) {
    deleteDataSoal("DELETE FROM tb_soal WHERE id_user = '$id'");
    deleteDataUser("DELETE FROM tb_user WHERE id = '$id'");
    header("Location: ../../index.php");
}

if(@$_SESSION['awal']) {
    header("Location: ../../index.php");
}

$_SESSION['idAwal'] = $id;

$_SESSION['rendah'] = "rendah01";
$_SESSION['rendah2'] = "rendah02";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleRendah.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Hasil Kuesioner</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
  <div class="container justify-content-center navs ">
    <a class="navbar-brand" href="#"><span id="co1">Co</span>vidteria</a>
  </div>
</nav>
<section class="hasil">
    <div class="container text-center">
        <div class="row">
             <div class="col-12 col-md-12">
                <h2><span id="hasil">Hasil</span> Kuesioner</h2>
                <p>Dari pertanyaan yang anda</p>
                <p class="paragraf">jawab memperoleh hasil sebagai berikut :</p>
                <div class="container-fluid text-center">
                    <div class="col-md-12">
                        <h5>Nama</h5>
                        <p><?= $dataUser['nama']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <h5>Umur</h5>
                        <p><?= $dataUser['umur']; ?></p>
                    </div>
                    <div class="col-md-12">
                        <h5>Jenis Kelamin</h5>
                        <p><?= $dataUser['jk']; ?></p>
                    </div>
                </div>
                <h3>Anda Beresiko <span id="rendah">Rendah <i class="fas fa-grin"></i></span> terpapar Covid-19</h3>
                <p class="red"><b>*Hasil ini hanya untuk menyadarkan masyarakat untuk terus mematuhi protokol kesehatan</b></p>
                <p class="paragraf red"><b>*dan juga untuk membiasakan berperilaku hidup sehat</b></p>
                <p class="paragraf">Terimakasih telah mengunjugi Covidteria :)</p>
                <p class="paragraf"><i><b>#PakaiMasker #Dirumahaja</b></i></p>
                <form method="post">
                    <button type="submit" name="submit_rendah" class="btn btn-success"><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Selesai</button>
                </form>
             </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>