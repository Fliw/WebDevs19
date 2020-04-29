<?php
$x = $_POST ["angka1"];
$y = $_POST ["angka2"];
$z = $x*$y;
$i = 1;

if ($x > 10 || $y > 10)
{
    echo "Hasil Perkalian dari $x dan $y = ".$z;
    echo "<br>";
    echo "Maaf Kalkulator jelek tidak sampai";
    exit;
}
else
{
    echo "Hasil Perkalian dari $x dan $y = ".$z;
    echo "<br>";
    echo "Jika ditulis urut sebanyak $z : <br>";
    while ($i <= $z)
    {
        echo "Angka $i <br>";
        $i++;
    }
    echo "Terimakasih telah menggunakan Kalkulator ini";
}
?>
