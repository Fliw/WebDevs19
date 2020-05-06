<?php

//Fungsi untuk menampung inputan user
$perintah = [
    'angka1'=>$_POST['angka1'],
    'angka2'=>$_POST['angka2'],
    'operator'=>$_POST['operator'],
];

//fungsi kalkulasi
function kalkulasi($x,$y,$op){
    if($op=="*"){
        return $x*$y;
    }
    else if($op=="+"){
        return $x+$y;
    }
    else if($op=="/"){
        return $x/$y;
    }
    else if($op=="-"){
        return $x-$y;
    }
    else{
        return "*sfx PERADABAN";
    }
}   // untuk mengambil data dari user dan menampilkan hasil operasi
    echo kalkulasi($perintah['angka1'],$perintah['angka2'],$perintah['operator']);
?>