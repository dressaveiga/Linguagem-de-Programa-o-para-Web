<?php

$nota1 = $_POST ["numero1"];
$nota2 = $_POST ["numero2"];
$nota3 = $_POST ["numero3"];
$nota4 = $_POST ["numero4"];


$resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "A média final do aluno é: ", $resultado;

?>
