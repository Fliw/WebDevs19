<?php

$x = $_GET['angka1'];
$y = $_GET['angka2'];
$pilihan = $_GET['pilihan'];

if($pilihan=='tambah'){
    $z = $x+$y;
    echo "Hasilnya dari " . $x . " + " . $y . " = " . $z;
} else if($pilihan=='kurang'){
    $z = $x-$y;
    echo "Hasilnya dari " . $x . " - " . $y . " = " . $z;
} else if($pilihan=='kali'){
    $z = $x*$y;
    echo "Hasilnya dari " . $x . " * " . $y . " = " . $z;
} else if ($pilihan=='bagi'){
    $z = $x/$y;
    echo "Hasilnya dari " . $x . " / " . $y . " = " . $z;
}