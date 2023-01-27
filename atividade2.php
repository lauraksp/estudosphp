<?php

/*Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40. */

$num = 9;

// PHP_EOL = quebra de linha // 

/* inicializador - primeira expressao do for; eh utilizado como contador e eh executado antes da primeira interacao do loop.

   condicao - expressao logica q serve p controlar qnts x o loop sera executado, 
      no ex o loop ira executar enqnt o contador for menor ou = 10,

   iterador - terceira expressao; executada ao final de cada iteracao do loop,
      apos cada iteracao o contador eh incrementado. 
      ex : iteracao 1 - contador 0
           iteracao 2 - contador 1

    Na pratica : a variavel contador inicia com valor 0,
      a condicao retorna TRUE, entao executa o loop,
      a variavel contador eh impressa no console,
      o contador eh incrementado (iterador). */

// So eh possivel uma unica condicao por cada estrutura for //       

for($l = 0; $l <= 10; $l++){
  echo "{$num} * {$l} = " . ($num * $l). PHP_EOL ;
}

/*$texto = "Laura";
echo gettype($texto);
Pra nao esquecer. */