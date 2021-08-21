<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_covidteria";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

// fungsi yg diinputkan user di halaman index.php

function userInput($input) {
    global $koneksi;
    $nama = htmlspecialchars($input['nama']);
    $umur = htmlspecialchars($input['umur']);
    $jk = htmlspecialchars($input['jk']);

    $query = "INSERT INTO tb_user VALUES ('', '$nama', '$umur', '$jk')";
    mysqli_query($koneksi, $query);
}

// fungsi untuk menginputkan soal_1 sampai soal_10

function soalInput($input) {
    global $koneksi;
    $soal = htmlspecialchars($input['soal']);
    $id = $_SESSION['id'];

    $query = "INSERT INTO tb_soal VALUES ('$id', '$soal')";
    mysqli_query($koneksi, $query);
}

// fungsi untuk mengambil jawaban "Ya"

function queryYa($queryYa) {
    global $koneksi;
    $result = mysqli_query($koneksi, $queryYa);
    $tampung = [];
    while($row = mysqli_fetch_array($result)) {
        $tampung[] = $row;
    }
    return $tampung;
}

// fungsi untuk mengambil jawaban "Tidak"

function queryTidak($queryTidak) {
    global $koneksi;
    $result = mysqli_query($koneksi, $queryTidak);
    $tampung = [];
    while($row = mysqli_fetch_array($result)) {
        $tampung[] = $row;
    }
    return $tampung;
}

// fungsi untuk mengambil jawaban "Kadang-kadang"

function queryKadang($queryKadang) {
    global $koneksi;
    $result = mysqli_query($koneksi, $queryKadang);
    $tampung = [];
    while($row = mysqli_fetch_array($result)) {
        $tampung[] = $row;
    }
    return $tampung;
}

// fungsi untuk mengambil data user

function queryUser($queryUser) {
    global $koneksi;
    $result = mysqli_query($koneksi, $queryUser);
    $user = mysqli_fetch_array($result);

    return $user;
}

// fungsi untuk menghapus seluruh data/kuesioner selesai

function deleteDataUser($deleteDataUser) {
    global $koneksi;
    mysqli_query($koneksi, $deleteDataUser);
}

function deleteDataSoal($deleteDataSoal) {
    global $koneksi;
    mysqli_query($koneksi, $deleteDataSoal);
}

?>