<?php

$n = $_POST['n1'];
$m = $_POST['n2'];

$multiplos = [];

for ($i = 1; $i < $m; $i++) { 
   $multiplos[] = $n * $i;
}

print_r($multiplos);

?>