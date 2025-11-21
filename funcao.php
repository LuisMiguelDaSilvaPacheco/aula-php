<?php

function somar(int $numero1 = 0, int $numero2 = 0)
{
   print $numero1 + $numero2 . PHP_EOL;
}

$numeroAleatorio1 = rand(1, 10);
$numeroAleatorio2 = rand(1, 10);
somar($numeroAleatorio1, $numeroAleatorio2);

function adicionarValor(&$numeros)
{
   array_push($numeros, 10);
}

$numeros = [1, 2, 3, 4];
adicionarValor($numeros);
print_r($numeros);