<?php

//scope

$x1=10;

function tampilx()
{
    // global $x1; 
    $x2=12;
    echo "ini nilai x2 yang terdapat pada function= $x2";
    echo "</br>";

    // jika kita panggil nilai x1 dari function
    echo "ini nilai x1 dipanggil melalui function=$x1";
}
tampilx();
echo "</br>";

echo "ini nilai x1 = $x1";

?>

