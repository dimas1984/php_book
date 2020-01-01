<?php

 $mahasiswa=
    [
     ["dina","123456", "teknik kimia","dina@gmail.com"],
     ["dino","780912", "teknik mesin","dino@gmail.com"],
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <title> Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa array multidimensi </h1>  
<ul>  
    <?php foreach($mahasiswa as $mhs): ?>
         <li><?php echo $mhs[0]; ?></li>   
         <li><?php echo $mhs[1]; ?></li>   
         <li><?php echo $mhs[2]; ?></li>   
         <li><?php echo $mhs[3]; ?></li></br>
         
    <?php endforeach; ?>
</ul>

</body>
</html>

 

