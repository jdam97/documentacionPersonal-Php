<?php
//13.Funciones

/**
 * todo Punto 13 Funciones
 * *Funciones definidas por el usuario
 * *son bloques de código que se pueden llamar y ejecutar en cualquier parte de un programa para realizar una tarea específica.
 * 
 */

/**
 * todo Punto 13 Funciones
 * *Funciones que no retornan valor
 * *en programación las funciones que no retornan ningun valor se denominan función "void". en PHP podemos definir una funcion void usando la palabra clave VOID en lugar de especificar un tipo de retorno.
 * 
 */

 //ejemplo

 declare (strict_types=1);

 function sumar (int $numero1 = 0, array $numero2):void{
    echo $numero1 + $numero2;
 };

 sumar(10,[]);

/**
 * todo Punto 13 Funciones
 * *Funciones que retornan valor
 * *en Php se pueden definir funciones que permiten recordar un valor al momento de finalizar la ejecución de todas las expresiones que se encuentran en su cuerpo principal, osea que retorna.
 * 
 */

function usuarioAutenticado(bool $autenticado) : ? string{
    if($autenticado){
        return "el usuario está autenticado";
    } 
    else{
        return null;
    }

}
$usuario = usuarioAutenticado(false);

echo $usuario;

/**
 * *Funciones por variable
 */
$fn = function(){
    return true;
};

echo $fn(); 

/**
 * *Funciones con use()
 */

$nombre = "jonathan";
$fn = function () use($nombre){
    return $nombre;
};

echo $fn();


/**
 * * obtener parametros sin pasarlos
 */

 function datos(){
    print_r(func_get_args());

 };
 datos("Jonathan",23,true);

/**
 * *Funcion cosas que miguel dijo que estaba dificil
* *func_get_args() and func_get_arg()
*/

function datos1():void{
    print_r(...func_get_args());
};

datos1(["nombre"=>"Camilo", "edad"=> 23, "vida"=> true]);


/**
 * *extraer datos con ... y extract para arrays asociativos
 * 
 */

 function datos2(){
    extract(...func_get_args());
    echo $nombre;
    echo $edad;
    echo $casa;
};
datos2(["nombre"=> "Jonathan","edad"=> 23,"casa"=> true]);

 ?>