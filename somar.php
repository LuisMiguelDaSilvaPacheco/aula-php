<?php

function somar(...$numeros)
{
   print array_sum($numeros);
}

function media(){
   print somar() / 2;
}

