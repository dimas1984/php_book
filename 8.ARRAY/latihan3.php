<?php

 $angka=[3,2,4,6,12,34,56,43];
?>

<!DOCTYPE html>
<html>
<head>
    <title> Perulangan Array</title>
    <style>
        div
        {
            width:50px;
            height:50px;
            background-color:salmon;
            text-align:center;
            line-height:50px; 
            margin:3px;
            float:left;
        }
        .clear
        {
            clear:both;
        }
    </style>
</head>
<body>
    <!-- tambahkan looping php -->
    <?php 
        // for($i=0;$i<7;$i++){
            for($i=0;$i<count($angka);$i++){
    ?>
    
    <div>
    <!-- tambahakn code php untuk menampilkan perulangan -->
    <?php echo $angka[$i]; ?>
    </div>

    <!-- tutup perulangan  -->
        <?php } ?>
    
</body>
</html>

