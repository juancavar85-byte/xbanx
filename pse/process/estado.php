<?php 
require('../panel/include/setings.php');

$reg = $_COOKIE['id'];

$es = status($reg);

echo $es;
?>