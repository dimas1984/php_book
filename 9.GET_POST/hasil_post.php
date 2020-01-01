<?php

    //cek apakah x sudah diset belum
    if(isset($_POST["submit"]))
    {
    //   redirect 
      header("Location:form_post2.php");
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>hasil dari post</title>
       </head>
    <body>
    <h1>selamat datang di halaman hasil_post.php,<?= $_POST["nama"];?></h1>
    </body>
</html>


