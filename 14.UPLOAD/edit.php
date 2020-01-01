<?php 
    require 'functions.php';

    // menggunakan method get untuk mengambil id yg telah terseleksi oleh user dan dimasukkan 
    // ke dalam variabel baru yaitu $id
    $id=$_GET[id];
    // var_dump($id);

    //query berdasarkan id dan index ke nol
    $mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];
    //var_dump($mhs[0]["Nama"]);


    // cek apakah button submit sudah di tekan atau belum 
    if(isset($_POST['submit']))
    {
        
        //cek sukses data dirubah menggunakan function edit pada functions.php
        if(edit($_POST)>0)
        {
               echo "
                <script>
                    alert('data berhasil diperbaharui');
                    document.location.href='index.php';
                </script>

               ";
        }else{
            echo "
            <script>
                 alert('data gagal diperbaharui');
                document.location.href='edit.php';
             </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update data</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <!-- tambahkan atribut enctype -->
    <form action="" method="post" enctype="multipart/form-data">
        <li> 
            <input type="hidden" name="id" value="<?= $mhs[id] ?>">
            <!-- untuk mengirimkan gambar lama -->
            <input type="hidden" name="GambarLama" value="<?= $mhs[Gambar]; ?>"> 
        </li>
        <ul>
            <li>
                  <!-- for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
                <label for="Nama">Nama :</label>
                <!-- untuk pengisian name  besar kecilnya harus sesuai dengan fieldnya -->
                <input type="text" name="Nama" id="Nama" value="<?= $mhs[Nama]; ?>" >
            </li>
            <li>
                <label for="Nim">Nim :</label>
                <input type="text" name="Nim" id="Nim" required value="<?= $mhs[Nim]; ?>">
           </li>
           <li>
                <label for="Email">Email :</label>
                <input type="text" name="Email" id="Email" required value="<?= $mhs[Email]; ?>" >
           </li>
           <li>
                <label for="Jurusan">Jurusan :</label>
                <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs[Jurusan]; ?>">
           </li>
           <li>
                <label for="Gambar">Gambar :</label><br>
                <!-- tambahkan image source agar gambar dapat muncul  -->
                <img src="image/<?= $mhs[Gambar];?>" alt="" height="100" width="100"><br>
                <input type="file" name="Gambar" id="Gambar" >
           </li>
           <li>
                <button type="submit" name="submit"> Update </button>
           </li>
        </ul>
    
    </form>
</body>
</html>
