<?php
//12.Estructuras de control

/**
 * todo Punto 12 Estructuras de control 
 * *controlan el flujo de ejecución del programa
 * *1.condicionales
 * *2.repetitivas
 * *3.excepciones
 */

/**
 * todo Estructuras condicionales
 * *IF
 * *permite tomar decisiones en función de si cumple o no una determinada condición.
 */

//Ejemplo
$edad = 15;
if($edad < 18){
    echo "Menor de edad";
};

/**
 * todo Estructuras condicionales
 * *Switch
 * *permite ejecutar diferentes bloques de código dependiendo del valor de una variable.
 */

 //Ejemplo
 $edad = 20;
switch ($edad) {
    case '<18':
        echo "menor de edad";
        break;
    
    case '>18':
        echo "mayor de edad";
        break;
}
/**
 * todo Estructuras Repetitivas
 * *While
 * *permiten repetir la ejecución de un bloque de código mientras se cumpla una condición.
 */
//Ejemplo
$numero=3;
 while ($numero != 1) {
    echo $numero;
    $numero--;
 }

 /**
 * todo Estructuras Repetitivas
 * *Do-while
 * *similar al while pero garantiza que el el bloque de código se ejecuta al menos una vez, esto independientemente si se cumple o no la condición.
 */
//Ejemplo
$numero1=1;
 do {
    echo "hola";
 } while ($numero1 != 1);


/**
 * todo Estructuras Repetitivas
 * *For
 * *Permite la ejecución de un bloque de código un número fijo de veces, controlando el número de iteraciones mediante un contador.
 */
//Ejemplo
$numero = 1;
for ($i=1; $i <10 ; $i++) { 
    echo $numero;
}

 ?>