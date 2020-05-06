<?php
    $x = $_GET['pertama'];
    $y = $_GET['kedua'];
    $pilihan = $_GET['pilihan'];

    if ($pilihan=='pertambahan')
    {
        $z = $x + $y;
        echo "Hasil Dari $x + $y = " .$z;
    }
    else if ($pilihan=='pengurangan')
    {
        $z = $x - $y;
        echo "Hasil Dari $x - $y = " .$z;
    }
    else if ($pilihan=='pembagian')
    {
        $z = $x / $y;
        echo "Hasil Dari $x : $y = " .$z;
    }
    else if ($pilihan=='perkalian')
    {
        $z = $x * $y;
        echo "Hasil Dari $x x $y = " .$z;
    }
?>