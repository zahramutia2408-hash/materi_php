<?php

// for di dalam PHP
for($i=0; $i<5; $i++){
    echo "Ini Perulangan ke-" . $i . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
    <style>
            table {
                border-collapse: collapse;
            }


            table, th, td {
                border: 1px solid black;
            }


            th, td {
                padding: 8px;
            }
    </style>
</head>
<body>
    <h3> Daftar Mata Kuliah </h3>
    <table>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1; $i<=3; $i++){ ?>
            <tr>
                <td><?php echo "Mata Kuliah ke-" . $i ?></td>
                <td>..</td>
                <td>..</td>
                <td>..</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>