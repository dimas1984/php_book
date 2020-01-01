<?php

    //cek apakah x sudah diset belum
    if
    (
    !isset($_GET["x"])||
    !isset($_GET["nim"])||
    !isset($_GET["jurusan"]))
    {
      //redirect
    header("Location:variabel_get3.php");
    exit;
    }
    
?>




<!DOCTYPE html>
<html>
<head>
   <title> Detail mahasiswa</title>
</head>
<body>  
    <ul>
        <li>
            Nama = <?php echo $_GET["x"];?>
        </li>
        <li>
           Nim = <?= $_GET["nim"];?>
        </li>
        <li>
           Jurusan = <?= $_GET["jurusan"];?>
        </li>        
    </ul>
    <a href="variabel_get3.php">kembali
</body>
</html>


