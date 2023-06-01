<?php
//10.Métodos arrays
    /**
     * Todo array_flip()
     * Modifica el array por  los valores dentro de él como keys y el index como valor
     */
    echo "<h1>Método array_flip()</h1>";
    $musica = ['Rock','Metal','electronica','pop'];
    print_r(array_flip($musica));
    echo "<br>";
    echo "<br>";

     /**
     * Todo array_fill()
     * Relena un array las veces que se le aclare y con el valor que se le especifique
     * Recibe 3 parametros:
     * 1. recibe el index por donde empezaremos a llenar el array
     * 2. cuantas veces lo pondremos
     * 3. el valor de cada uno de esos arrays
     */
    echo "<h1>Método array_fill()</h1>";
    $fill = array_fill(6,3,'Hola mundo');
    print_r($fill);
    echo "<br>";
    echo "<br>";
    
     /**
     * Todo array_filter()
     * Filtra los elementos de un array pasandole una funcion que lleva la condicion por la que los filtra
     */
    echo "<h1>Método array_filter()</h1>";
    $numeros = [12,2,2,4,5,6,2,2,9,10];
    print_r(array_filter($numeros,function ($num){
        return $num !=2;
    }));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_map()()
    * Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
    * *Acá puedo interpolarizar sin usar las backticks de js
    * *Puedo invocar la funcion también solo poniendola entre " " 
    */
    echo "<h1>Método array_map()</h1>";
    function saludar($name){
        return "Hola $name";
    };
    $nombre = ['Camilo','Jonathan','Jeanpierre','Hitel','Cesar'];
    print_r(array_map("saludar",$nombre));
    echo "<br>";
    echo "<br>";

    /**
     * Todo array_reduce()
     * Reduce un array a un solo valor aplicando una función de devolución de llamada.
     * * es similar al forEach en js, por cada elemento del array, aplica la funcion que le pase como 2do parametro,
     * recibe 2 parametros:
     * 1. el array
     * 2. funcion por la que va a reducir
     */
    echo "<h1>Método array_reduce()</h1>";

    function sum($total,$item){
        return $total+=$item;
    }
    $numeros2 = [1,2,3,4,5];
    print_r(array_reduce($numeros2,"sum"));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_key_exists()
    * comprueba si la key existe dentro del array
    */
    
    
?>