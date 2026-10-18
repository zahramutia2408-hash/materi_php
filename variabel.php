<?php

echo "<h3>Variable dan Tipe Data</h3>";
$mata_kuliah = "Pemrograman Internet";

echo $mata_kuliah;
echo "<br>";

// tipe_data
    $nama = "Mamba Siti Ali"; // String
    $umur = 21;               // Integer
    $tinggi = 1.75;           // Float
    $benar = true;            // Boolean
    $salah = false;           // Boolean
    $kosong = NULL;           // Null

// var_dump adalah fungsi php untuk mengecek informasi detail terkait suatu variabel
var_dump($nama, $umur, $tinggi, $benar, $salah, $kosong);

echo "<h3>Penggabungan Variable</h3>";

$nama_depan = "Mamba";
$nama_tengah = "Siti";
$nama_belakang = "Ali";

echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang;

?>