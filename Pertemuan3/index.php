<?php 
    //Ini Komentar
    /*
        ini komentar banyak
    */

    // Nama saya faridah

    // echo "Pertemuan 3 - Pemrograman Web";

    // print "Faridah Hanifahkkk";

    // print_r("Faridah Hanifah");

    // var_dump("Faridah Hanifah");

    // echo false;

    $nama = "Faridah Hanifah";

    echo $nama;

    echo "<br>";

    // + - * / %
    $x = 10;
    $y = 20;
    echo $x + $y;

    echo "<br>";

    // Penghubung Variabel / Concat

    $nama_depan = "Faridah";
    $nama_belakang = "Hanifah";

    echo $nama_depan  . " " . $nama_belakang;

    echo "<br>";
    // Operator Assignment
    $a = 1;
    $a *= 2;

    echo $a;

    // Operator Perbandingan
    // >, <, ==, >=, <=, !=
    var_dump(1 >= 5);

    // Operator Identitas 
    //  ===, !==
    echo "<br>";
    var_dump(1 !== 5);

    // Opeartor Logika
    //  &&, ||, !
    echo "<br>";

    $x = 10;

    var_dump($x < 20 || $x % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Pemrograman Web"; ?></h1>

    <?php
        echo "<h1>Halo, Selamat Datang Faridah</h1>";
    ?>
</body>
</html>