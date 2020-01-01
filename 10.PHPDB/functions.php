<?php
// membuat koneksi
$conn=mysqli_connect("localhost","root","","phpdatabase");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");  

// function query akan menerima isi paramater dari string query yg ada pada index2.php (line 3)
function query($query_kedua){
    // dikarenakan $conn diluar function query maka dibutuhkan scope global $conn
    global $conn; 
    $result = mysqli_query($conn,$query_kedua);
    // wadah kosong untuk menampung isi array pada saat looping line 16
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[]=$row;    
    }
    return $rows;
}
?> 

