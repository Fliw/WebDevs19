<?php
$array_saya = array(
    'num1' => $_GET["angka1"],
    'num2' => $_GET["angka2"],
    'operasi' => $_GET["pil"]); 
  
function perhitungan ($x,$y,$z)
{
    if ($z == "plus"){
        $hasil = $x + $y ;
        echo  "Hasil Penjumlahan adalah ".$hasil;
    }
    else if($z == "minus"){
        $hasil = $x - $y ;
        echo  "Hasil Pengurangan adalah ".$hasil;
    }
    else if ($z == "kali"){
        $hasil = $x * $y ;
        echo  "Hasil Perkalian adalah ".$hasil;
    }
    else if ($z == "bagi"){
        $hasil = $x / $y ;
        echo  "Hasil Pembagian adalah ".$hasil;
    }
}
perhitungan($array_saya['num1'], $array_saya['num2'], $array_saya['operasi']);
?>