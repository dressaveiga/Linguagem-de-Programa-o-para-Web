<?php

$numero = $_POST ["numero"];
$i = 1;
$multi = 0;

while ($i <= 10) {
    $multi = $numero * $i;
    echo $numero, " vezes ", $i, " é igual a ", $multi;
    echo ("</br>");
    $i ++;
}


?>
