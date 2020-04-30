<?php
$x = $_GET['pertama'];
$y = $_GET['kedua'];
$z = $x * $y;

if ($x>9 || $y>9)
{
    echo "Hasil Perkalian dari $x x $y adalah = " .$z;
    echo "<br>";
    echo "Maaf Angka Yang Anda Inputkan Terlalu Besar ";
}
else
{
    echo "Hasil ".$x. 'x' .$y."=".$z;
    echo "<br>";

    for ($i=1; $i<=$z; $i++)
    {
        echo "Hallo, Terimakasih Telah Mencoba Ke : " .$i;
        echo "<br>";
    }
}
?>