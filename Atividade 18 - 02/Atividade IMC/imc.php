<?php

$peso = $_POST ['peso'];
$altura = $_POST ['altura'];



$resultado = ($altura * $altura) / $peso;
$resultado = round($resultado);

if ($resultado < 20) {
    $mensagem = "Você está abaixo do peso ideal";
} 

elseif (($resultado > 20) and ($resultado < 25)) {
    $mensagem = "Você está no seu peso ideal";
}

else {
    $mensagem = "Você está acima do peso ideal";
}


echo "Sua altura é: <b> $altura </b> <br>";
echo "Seu peso é: <b> $peso </b> <br>";
echo "Seu resultado é: <b> $mensagem </b> <br>";





?>
