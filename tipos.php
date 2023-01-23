<?php

$idade = 21; 
$salario = 1000.30;
$divisao = 20 / 7; // O PHP entende o tipo de dado pelo valor, nao e necessario declarar //

// Se echo fosse gettype($divisao) traria um double, pois ele entende o numero inteiro, descartando o decimal //

// O echo ($divisao) nos tras o resultado com as casas decimais // 

$divisao = 3; // aqui o PHP dira que a divisao e um   // 

// echo gettype($divisao); //

$texto = "Laura Kimberly";

echo gettype($texto);

/* Float e Double representam 
    numeros decimais, mas Double 
    tras mais precisao.  */