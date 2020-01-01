<?php

function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

echo "Umur Anda adalah ". hitungUmur(1991, 2018) ." tahun";
?>

