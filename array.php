<?php
// Array adalah variabel yang dapat menyimpan banyak data
// ada 2 cara penulisan array di dalam PHP
// Cara pertama (cara lama)
$hari = array ("Senin", "Selasa", "Rabu");

// Cara kedua (cara baru)
$bulan = ["Januari", "Februari", "Maret"];
$kelompok1 = [
    "Zamzam aduhay",
    "Farel allahuakbar",
    "Siti lala Po"
];

// cara menampilkan/mencetak array adalah menggunakan var_dump atau print_r
var_dump ($bulan);
print_r ($bulan);
echo "<hr>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>

</head>
<body>
    <h3> Bikin kotak array menggunakan perulangan FOR dan FOREACH</h3>

    <!-- Perulangan menggunakan FOR-->
    <?php $array_angka = [3,5,7,9,11,13,15,17,19,21]; ?>
    <?php for ($i=0; $i<count($array_angka); $i++){ ?>
    <div class="kotak"><?php echo $array_angka[$i] ?></div>
    <?php } ?> 

    <div class="clear"></div>
    
    <!-- Perulangan menggunakan FOREACH -->
    <?php foreach($array_angka as $data): ?>
    <div class="kotak"><?php echo $data ?></div>
    <?php endforeach ?>

    <div class="clear"></div>
    
</body>
</html>