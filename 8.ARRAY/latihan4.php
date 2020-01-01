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
    </style>
</head>
<body>
    <!-- maksud dari kondisi foreach(untuk setiap) adalah untuk setiap isi element 
    / nilai di array $angka akan disimpan satu2 oleh $a -->
    
    <!-- foreach cara pertama -->
        <!-- <?php foreach($angka as $a){ ?>
        <div> 
            <?php echo $a ?>
        </div>
        <?php } ?>
         -->
     <!-- foreach cara kedua -->
    <?php foreach($angka as $a): ?>
            <div><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>

