<?php  
$a = $_GET ["angkapertama"];
$s = $_GET ["angkakedua"];
$d = $a*$s;
$w = 1;
if ($a > 9 || $s > 9)
    {
        echo "Hasil Perkalian dari $a dan $s = ".$d;
            echo "<br>";
                echo "Maaf kalkulator ini buriq jadi tidak sampai";
                exit;
    }
else
{
    echo "Hasil Perkalian dari $a dan $s = ".$d;
        echo "<br>";
            echo "Jika ditulis urut maka sebanyak $d : <br>";
                while ($w <= $d)
                {
                    echo "Angka $w <br>";
                    $w++;
                }
                echo "Terimakasih telah menggunakan kalkulator buriq ini :)";

        }

?>