<?php
//11.Métodos arrays

/**
 * ? Punto 11 isset() y empty()
 */

/**
 * todo: funcion isset()
 * *Es una funcion que verifica si una variable esta definida y si tiene valor definido no null.
 */

$var = "nose php es aburrido";
if (isset($var)){
    echo "$var esta definida";
}else{
     echo "$var no esta definida";
};

/**
 * todo: funcion empty()
 * *comprueba si una variable o un elemento esta vacio.
 */
$coso;
if(empty($coso)){
    echo "la variable no esta definida o no tiene valor";
} else {
    echo "la variable esta definida";
}

?>