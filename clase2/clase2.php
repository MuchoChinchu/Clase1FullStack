<?php
$num1 = 0;
$num2 = 0;

$operacion = readline("Escriba R para restar o S para sumar ");
switch ($operacion){
    case "R":
        leerInput();

        echo "la resta es " . resta($num1, $num2);
        break;

    case "S":
        leerInput();

        echo "La suma es " . suma($num1, $num2);
        break;
    default: echo"No existe la operacion" . $operacion;

    case "D":
        leerInput();
        echo "la division es " . division($num1, $num2);
        break;

    case "M":
        leerInput();
        echo "la multiplicaion es " . multiplicacion($num1, $num2);
        break;
}


function suma ($numero1, $numero2) {

    return $numero1 + $numero2;
}

function resta($num1,$num2){
    return $num1 - $num2;
}

function multiplicacion($num1, $num2){

    return $num1 * $num2;

}

function division($num1, $num2){

    return $num1 / $num2;
}

function leerInput (){
        global $num1, $num2;
    $num1=readline("Introduzca valor A ");
    $num2=readline("introduzca valor B ");

    if (!is_numeric($num1) || !is_numeric($num2))  {
        exit("Los valores deben ser numericos ");

    }




}

