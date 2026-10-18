<?php
    // SINTAKS DASAR PHP

    // STANDAR OUTPUT
    // echo
    // print
    // var_dump
    // print_r

echo "Mata Kuliah : Pemograman Internet";
echo "<br>";
echo "SKS : 4";
echo "<br>";
echo "Dosen : Jaka Septiadi, M.Kom.";
echo "<hr>";

    // PENULISAN SINTAKS DALAM PHP
    // 1. sintaks HTML di dalam sintaks PHP
    // 2. sintaks PHP di dalam sintaks HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks Dasar HTML</title>
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
    <h3>Contoh penulisan PHP di dalam HTML</h3>


    <table>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo "Pemrograman Internet"; ?> </td>
                <td> <?php echo "4"; ?>  </td>
                <td> <?php echo "Jaka Septiadi, M.Kom."; ?> </td>
            </tr>
        </tbody>
    </table>

</body>
</html>