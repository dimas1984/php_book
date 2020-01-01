<?php
 
$buah = array('Durian', 'Nangka', 'Jeruk', 'Apel');
 
foreach($buah as $value)
{
    echo $value . '<br />';
}


foreach($buah as $key => $value)
{
    echo $key . ' adalah kunci dari '. $value . '<br />';
}
?>