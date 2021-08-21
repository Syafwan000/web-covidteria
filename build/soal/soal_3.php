<?php 
session_start();
require '../../config/functions.php';
if(isset($_POST['submit'])) {
    $_SESSION['soal_3'] = true;
    soalInput($_POST);
    header("Location: soal_4.php");
}

if(!isset($_SESSION['soal_2'])) {
    header("Location: soal_2.php");
}

if(isset($_SESSION['soal_3'])) {
    header("Location: soal_4.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleSoal.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Pertanyaan 3</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
  <div class="container justify-content-center navs ">
    <a class="navbar-brand" href="#"><span id="co1"><i class="fas fa-file-alt"></i></span>&nbsp;&nbsp;Pertanyaan 03/10</a>
  </div>
</nav>
<section class="soal" id="soal">
    <div class="container text-center">
        <div class="row">
             <div class="col-12 col-md-12">
                <h2>Apakah anda selalu mencuci atau mengganti masker setelah digunakan untuk berpergian <span id="tanya">?<span></h2>
                <form method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id_user" value="<?= $_SESSION['id']; ?>">
                        <div class="form-check">
                            <input class="form-check-input btn-check" type="radio" id="ya" value="Ya" name="soal" required="required">
                            <label class="form-check-label btn btn-outline-primary" for="ya">Ya</label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input btn-check" type="radio" id="tidak" value="Tidak" name="soal" required="required">
                            <label class="form-check-label btn btn-outline-danger" for="tidak">Tidak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input btn-check" type="radio" id="kadang" value="Kadang-kadang" name="soal" required="required">
                            <label class="form-check-label btn btn-outline-warning" for="kadang">Kadang-kadang</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Selanjutnya&nbsp;&nbsp;<i class="fas fa-arrow-circle-right"></i></button>
                </form>
             </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>