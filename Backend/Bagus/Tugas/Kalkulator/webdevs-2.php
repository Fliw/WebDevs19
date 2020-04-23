<?php
$x = $_GET["satu"];
$y = $_GET["dua"];
$z = $x * $y;
if($x>9||$y>9)
{
    echo "Jangan lebih dari 9 bos, tapi hasilnya " . $z . " kalau penasaran";
} else {
    echo $z;
}
?>
