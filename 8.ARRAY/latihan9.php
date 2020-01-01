<?php

//  array associative 
//  definisinya sama dengan array numerik
//  perbedaannya key-nya berupa string kalau numerik key-nya berupa index
 
// array associative
$mahasiswa=
    [
     "Namaku"=>"dina",
     "Nim"=>"123456", 
     "jurusan"=>"teknik kimia",
     "Email"=>"dina@gmail.com",
     "No_tlp"=>"081273213213"
    ];
    // echo $mahasiswa["No_tlp"];
    var_dump($mahasiswa);
    echo "</br>";

// array numerik 
$mhs=["dina","123456", "teknik kimia","dina@gmail.com"];
// echo $mhs[3];
var_dump($mhs);

?>

