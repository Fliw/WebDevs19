<?php

$komando = array(
    'angka1'=>$_GET['angka1'],
    'angka2'=>$_GET['angka2'],
    'tujuan'=>$_GET['pilihan']
);

function hasil ($a,$b,$pilihan){
    if ($pilihan== 'tambah'){
        return $a+$b; }
        
        else if ($pilihan== 'kurang'){
        return $a-$b; }  
        
        else if ($pilihan== 'kali'){
        return $a*$b; }
        
        else if ($pilihan== 'bagi'){
        return $a/$b; }   

    }
echo "Jumlahnya adalah " . hasil($komando['angka1'],$komando['angka2'],$komando['tujuan']);
?>