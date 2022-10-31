<?php

$contador = 0;

while (true)
{
    $contador = aumentarContador($contador);
}

function aumentarContador($contador)
{
    $contador++;
    return $contador;
}