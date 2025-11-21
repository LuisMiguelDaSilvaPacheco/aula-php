<?php

function recursiva($numero)
{

   print "$numero \n";
   sleep(0.5);

   if($numero == 0){
      return 0;

   }

   $numero--;

   recursiva($numero);
}


recursiva(10);
