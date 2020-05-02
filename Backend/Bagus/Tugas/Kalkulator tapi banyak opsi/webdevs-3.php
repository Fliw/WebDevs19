<?php

$data_array = array(
    'angka1'=>$_GET['angka1'],
    'angka2'=>$_GET['angka2'],
    'operasi'=>$_GET['pilihan']
);

function kalkulasi ($x,$y,$pilihan){
    if ($pilihan=='tambah'){
        return $x+$y;
    } else if($pilihan=='kurang'){
        return $x-$y;
    } else if ($pilihan=='kali'){
        return $x*$y;
    } else if ($pilihan=='bagi'){
        return $x/$y;
    }
}
echo "hasilnya adalah " . kalkulasi($data_array['angka1'],$data_array['angka2'],$data_array['operasi']);