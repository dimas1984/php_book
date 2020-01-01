<?php
$array = ['Joel', 23, true, ['red', 'blue']]; echo json_encode($array);
echo json_encode($array, JSON_FORCE_OBJECT);
?>