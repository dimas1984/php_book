<?php

function perkenalan($nama, $salam){
  echo $salam.", ";
  echo $nama.", ";
  echo "Assalamualaikum, ";
  echo "Selamat Datang<br/>";
  echo "PHP Menyenangkan Sekaliiii<br/>";
}

perkenalan("Cinta Laura", "Hay cinta");

  echo "<hr>";

  $saya = "Aurel";
  $ucapanSalam = "Selamat pagi";

  perkenalan($saya, $ucapanSalam);
?>



