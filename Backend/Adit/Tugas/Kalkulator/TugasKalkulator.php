<?php
$a=$_POST['a'];
$b=$_POST['b'];


    $c=$a*$b;
    $x=1;
    if ($a<10 && $b<10) {
        echo "Inputan 1 = $a <br>";
        echo "Inputan 2 = $b <br>";
        echo "Hasil Perkalian $a x $b = $c";
        echo "<br>";
        echo "<br>";
        while($x<=$c){
            echo "Zulhaditya"."- ".$x."<br>";
            $x++;
        }
    }
    else {
        echo "Gakbisa bro, terlalu banyak looping males aing :v";
    }
?> 