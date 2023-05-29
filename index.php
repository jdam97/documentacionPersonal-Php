<?php 
//Punto 6: Funciones de salida en Php
    echo 'Hola Mundo!';

    // printf(): Esta función es similar a echo(), pero solo puede imprimir una cadena de texto a la vez
    $texto = 'Mundo';
    printf('Hola %s',$texto);

    //sprintf(): Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en la salida estándar, devuelve la cadena formateada como resultado.
    $mensaje = sprintf('Hola %s', $texto);
    echo $mensaje;
//
   
?>