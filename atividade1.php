<?php

/* Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo,
 negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/

$valor = 0;
$resultado = "";

if ($valor > 0) {
    $resultado = "Valor positivo";
}elseif($valor < 0) {
    $resultado = "Valor negativo";
}else {
    $resultado = "Igual a zero";
}

echo $resultado;
