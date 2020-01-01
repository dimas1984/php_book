<?php

 $mahasiswa=["dina","123456", "teknik kimia","dina@gmail.com"];
?>

<!DOCTYPE html>
<html>
<head>
    <title> Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa -> cara pertama </h1>  
<ul>  
    <?php foreach($mahasiswa as $mhs): ?>
         <li><?php echo $mhs; ?></li>   
    <?php endforeach; ?>
</ul>

<h1> Data Mahasiswa -> cara kedua </h1>
    <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul>


</body>
</html>

