<?php 

session_start();
if(!isset($_SESSION['soal_10'])) {
    header("Location: ../build/soal/soal_10.php");
}

require 'functions.php';
$id = $_SESSION['id'];
$ans_Ya = queryYa("SELECT * FROM tb_soal WHERE soal = 'Ya' AND id_user = '$id'");
$ans_Kadang = queryKadang("SELECT * FROM tb_soal WHERE soal = 'Kadang-kadang' AND id_user = '$id'");
$ans_Tidak = queryTidak("SELECT * FROM tb_soal WHERE soal = 'Tidak' AND id_user = '$id'");

$ya = count($ans_Ya);
$tidak = count($ans_Tidak);
$kadang = count($ans_Kadang);

if($ya == 10 && $tidak == 0 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 9 && $tidak == 1 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 9 && $tidak == 0 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 8 && $tidak == 2 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 8 && $tidak == 0 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 8 && $tidak == 1 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 7 && $tidak == 3 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 7 && $tidak == 0 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 7 && $tidak == 1 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 7 && $tidak == 2 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 6 && $tidak == 4 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 6 && $tidak == 0 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 6 && $tidak == 2 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 6 && $tidak == 1 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 6 && $tidak == 3 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 5 && $tidak == 5 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 5 && $tidak == 0 && $kadang == 5) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 5 && $tidak == 1 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 5 && $tidak == 4 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 5 && $tidak == 2 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 5 && $tidak == 3 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 4 && $tidak == 6 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 4 && $tidak == 0 && $kadang == 6) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 4 && $tidak == 3 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_rendah.php?id=" . $id);
} elseif($ya == 4 && $tidak == 2 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 4 && $tidak == 4 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 4 && $tidak == 1 && $kadang == 5) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 4 && $tidak == 5 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 3 && $tidak == 7 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 3 && $tidak == 0 && $kadang == 7) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 3 && $tidak == 1 && $kadang == 6) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 3 && $tidak == 6 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 3 && $tidak == 5 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 3 && $tidak == 2 && $kadang == 5) {
    header("Location: ../build/hasil/resiko_sedang.php?id=" . $id);
} elseif($ya == 3 && $tidak == 4 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 3 && $tidak == 3 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 8 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 0 && $kadang == 8) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 7 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 1 && $kadang == 7) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 2 && $kadang == 6) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 6 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 5 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 3 && $kadang == 5) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 2 && $tidak == 4 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 9 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 0 && $kadang == 9) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 1 && $kadang == 8) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 8 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 2 && $kadang == 7) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 7 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 3 && $kadang == 6) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 6 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 4 && $kadang == 5) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 1 && $tidak == 5 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 10 && $kadang == 0) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 0 && $kadang == 10) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 1 && $kadang == 9) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 9 && $kadang == 1) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 2 && $kadang == 8) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 8 && $kadang == 2) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 3 && $kadang == 7) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 7 && $kadang == 3) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 4 && $kadang == 6) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 6 && $kadang == 4) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
} elseif($ya == 0 && $tidak == 5 && $kadang == 5) {
    header("Location: ../build/hasil/resiko_tinggi.php?id=" . $id);
}

$_SESSION = [];
session_unset();
session_destroy();

exit;

// backup
// if($ya == 10 && $tidak == 0 && $kadang == 0) {
//     echo "Beresiko Rendah 10-0-0";
// } elseif($ya == 9 && $tidak == 1 && $kadang == 0) {
//     echo "Beresiko Rendah 9-1-0";
// } elseif($ya == 9 && $tidak == 0 && $kadang == 1) {
//     echo "Beresiko Rendah 9-0-1";
// } elseif($ya == 8 && $tidak == 2 && $kadang == 0) {
//     echo "Beresiko Rendah 8-2-0";
// } elseif($ya == 8 && $tidak == 0 && $kadang == 2) {
//     echo "Beresiko Rendah 8-0-2";
// } elseif($ya == 8 && $tidak == 1 && $kadang == 1) {
//     echo "Beresiko Rendah 8-1-1";
// } elseif($ya == 7 && $tidak == 3 && $kadang == 0) {
//     echo "Beresiko Rendah 7-3-0";
// } elseif($ya == 7 && $tidak == 0 && $kadang == 3) {
//     echo "Beresiko Rendah 7-0-3";
// } elseif($ya == 7 && $tidak == 1 && $kadang == 2) {
//     echo "Beresiko Rendah 7-1-2";
// } elseif($ya == 7 && $tidak == 2 && $kadang == 1) {
//     echo "Beresiko Rendah 7-2-1";
// } elseif($ya == 6 && $tidak == 4 && $kadang == 0) {
//     echo "Beresiko Rendah 6-4-0";
// } elseif($ya == 6 && $tidak == 0 && $kadang == 4) {
//     echo "Beresiko Rendah 6-0-4";
// } elseif($ya == 6 && $tidak == 2 && $kadang == 2) {
//     echo "Beresiko Rendah 6-2-2";
// } elseif($ya == 6 && $tidak == 1 && $kadang == 3) {
//     echo "Beresiko Rendah 6-1-3";
// } elseif($ya == 6 && $tidak == 3 && $kadang == 1) {
//     echo "Beresiko Rendah 6-3-1";
// } elseif($ya == 5 && $tidak == 5 && $kadang == 0) {
//     echo "Beresiko Tinggi 5-5-0";
// } elseif($ya == 5 && $tidak == 0 && $kadang == 5) {
//     echo "Beresiko Sedang 5-0-5";
// } elseif($ya == 5 && $tidak == 1 && $kadang == 4) {
//     echo "Beresiko Rendah 5-1-4";
// } elseif($ya == 5 && $tidak == 4 && $kadang == 1) {
//     echo "Beresiko Rendah 5-4-1";
// } elseif($ya == 5 && $tidak == 2 && $kadang == 3) {
//     echo "Beresiko Rendah 5-2-3";
// } elseif($ya == 5 && $tidak == 3 && $kadang == 2) {
//     echo "Beresiko Rendah 5-3-2";
// } elseif($ya == 4 && $tidak == 6 && $kadang == 0) {
//     echo "Beresiko Tinggi 4-6-0";
// } elseif($ya == 4 && $tidak == 0 && $kadang == 6) {
//     echo "Beresiko Sedang 4-0-6";
// } elseif($ya == 4 && $tidak == 3 && $kadang == 3) {
//     echo "Beresiko Rendah 4-3-3";
// } elseif($ya == 4 && $tidak == 2 && $kadang == 4) {
//     echo "Beresiko Sedang 4-2-4";
// } elseif($ya == 4 && $tidak == 4 && $kadang == 2) {
//     echo "Beresiko Tinggi 4-4-2";
// } elseif($ya == 4 && $tidak == 1 && $kadang == 5) {
//     echo "Beresiko Sedang 4-1-5";
// } elseif($ya == 4 && $tidak == 5 && $kadang == 1) {
//     echo "Beresiko Tinggi 4-5-1";
// } elseif($ya == 3 && $tidak == 7 && $kadang == 0) {
//     echo "Beresiko Tinggi 3-7-0";
// } elseif($ya == 3 && $tidak == 0 && $kadang == 7) {
//     echo "Beresiko Sedang 3-0-7";
// } elseif($ya == 3 && $tidak == 1 && $kadang == 6) {
//     echo "Beresiko Sedang 3-1-6";
// } elseif($ya == 3 && $tidak == 6 && $kadang == 1) {
//     echo "Beresiko Tinggi 3-6-1";
// } elseif($ya == 3 && $tidak == 5 && $kadang == 2) {
//     echo "Beresiko Tinggi 3-5-2";
// } elseif($ya == 3 && $tidak == 2 && $kadang == 5) {
//     echo "Beresiko Sedang 3-2-5";
// } elseif($ya == 3 && $tidak == 4 && $kadang == 3) {
//     echo "Beresiko Tinggi 3-4-3";
// } elseif($ya == 3 && $tidak == 3 && $kadang == 4) {
//     echo "Beresiko Tinggi 3-3-4";
// } elseif($ya == 2 && $tidak == 8 && $kadang == 0) {
//     echo "Beresiko Tinggi 2-8-0";
// } elseif($ya == 2 && $tidak == 0 && $kadang == 8) {
//     echo "Beresiko Tinggi 2-0-8";
// } elseif($ya == 2 && $tidak == 7 && $kadang == 1) {
//     echo "Beresiko Tinggi 2-7-1";
// } elseif($ya == 2 && $tidak == 1 && $kadang == 7) {
//     echo "Beresiko Tinggi 2-1-7";
// } elseif($ya == 2 && $tidak == 2 && $kadang == 6) {
//     echo "Beresiko Tinggi 2-2-6";
// } elseif($ya == 2 && $tidak == 6 && $kadang == 2) {
//     echo "Beresiko Tinggi 2-6-2";
// } elseif($ya == 2 && $tidak == 5 && $kadang == 3) {
//     echo "Beresiko Tinggi 2-5-3";
// } elseif($ya == 2 && $tidak == 3 && $kadang == 5) {
//     echo "Beresiko Tinggi 2-3-5";
// } elseif($ya == 2 && $tidak == 4 && $kadang == 4) {
//     echo "Beresiko Tinggi 2-4-4";
// } elseif($ya == 1 && $tidak == 9 && $kadang == 0) {
//     echo "Beresiko Tinggi 1-9-0";
// } elseif($ya == 1 && $tidak == 0 && $kadang == 9) {
//     echo "Beresiko Tinggi 1-0-9";
// } elseif($ya == 1 && $tidak == 1 && $kadang == 8) {
//     echo "Beresiko Tinggi 1-1-8";
// } elseif($ya == 1 && $tidak == 8 && $kadang == 1) {
//     echo "Beresiko Tinggi 1-8-1";
// } elseif($ya == 1 && $tidak == 2 && $kadang == 7) {
//     echo "Beresiko Tinggi 1-2-7";
// } elseif($ya == 1 && $tidak == 7 && $kadang == 2) {
//     echo "Beresiko Tinggi 1-7-2";
// } elseif($ya == 1 && $tidak == 3 && $kadang == 6) {
//     echo "Beresiko Tinggi 1-3-6";
// } elseif($ya == 1 && $tidak == 6 && $kadang == 3) {
//     echo "Beresiko Tinggi 1-6-3";
// } elseif($ya == 1 && $tidak == 4 && $kadang == 5) {
//     echo "Beresiko Tinggi 1-4-5";
// } elseif($ya == 1 && $tidak == 5 && $kadang == 4) {
//     echo "Beresiko Tinggi 1-5-4";
// } elseif($ya == 0 && $tidak == 10 && $kadang == 0) {
//     echo "Beresiko Tinggi 0-10-0";
// } elseif($ya == 0 && $tidak == 0 && $kadang == 10) {
//     echo "Beresiko Tinggi 0-0-10";
// } elseif($ya == 0 && $tidak == 1 && $kadang == 9) {
//     echo "Beresiko Tinggi 0-1-9";
// } elseif($ya == 0 && $tidak == 9 && $kadang == 1) {
//     echo "Beresiko Tinggi 0-9-1";
// } elseif($ya == 0 && $tidak == 2 && $kadang == 8) {
//     echo "Beresiko Tinggi 0-2-8";
// } elseif($ya == 0 && $tidak == 8 && $kadang == 2) {
//     echo "Beresiko Tinggi 0-8-2";
// } elseif($ya == 0 && $tidak == 3 && $kadang == 7) {
//     echo "Beresiko Tinggi 0-3-7";
// } elseif($ya == 0 && $tidak == 7 && $kadang == 3) {
//     echo "Beresiko Tinggi 0-7-3";
// } elseif($ya == 0 && $tidak == 4 && $kadang == 6) {
//     echo "Beresiko Tinggi 0-4-6";
// } elseif($ya == 0 && $tidak == 6 && $kadang == 4) {
//     echo "Beresiko Tinggi 0-6-4";
// } elseif($ya == 0 && $tidak == 5 && $kadang == 5) {
//     echo "Beresiko Tinggi 0-5-5";
// }

?>