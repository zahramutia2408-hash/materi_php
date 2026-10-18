<?php

// Operator
// Operator artimatika
// Operator perbandingan
// Operator 

echo "<h3> Operator Artimatika <h3>";

$a = 10;
$b = 3;

echo "Variable a = " . $a;
echo "<br>";
echo "Variable b = " . $b;
echo "<br>";

$hasil_penjumlahan = $a + $b;
$hasil_pengurangan = $a - $b;
$hasil_perkalian = $a * $b;
$hasil_pembagian = $a / $b;

echo "Hasil penjumlahan adalah = " . $hasil_penjumlahan . "<br>";
echo "Hasil pengurangan adalah = " . $hasil_pengurangan . "<br>";
echo "Hasil perkalian adalah = " . $hasil_perkalian . "<br>";
echo "Hasil pembagian adalah = " . $hasil_pembagian . "<br>";

echo "<h3> Operator Perbandingan dan Logika </h3>";

$nilai_uts = 88;
$nilai_kehadiran = 80;

if($nilai_uts > 75 || $nilai_kehadiran > 80){
    echo "Lulus";
}else{
    echo "Tidak Lulus";
}

?>