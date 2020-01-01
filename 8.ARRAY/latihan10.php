<?php
$mahasiswa=[
    [
        "Nama"=>"dina",
        "Nim"=>"123456", 
        "jurusan"=>"teknik kimia",
        "Email"=>"dina@gmail.com"
    ],
    [
        "Nama"=>"dino",
        "Nim"=>"9123124", 
        "jurusan"=>"teknik listrik",
        "Email"=>"dino@gmail.com"
    ]
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
         <li>Nama:<?php echo $mhs[Nama]; ?></li>   
         <li>Nim:<?php echo $mhs[Nim]; ?></li>   
         <li>Jurusan:<?php echo $mhs[jurusan]; ?></li>   
         <li>Email:<?php echo $mhs[Email]; ?></li></br>
         
    <?php endforeach; ?>
</ul>

</body>
</html>

