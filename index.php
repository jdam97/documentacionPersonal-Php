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
    * * esta es una forma de declarar las arrays como un tipo objeto con key y valor
    */
    echo "<h1>Método array_key_exists()</h1>";

    $animales = ['perro'=>1,'gato'=>2,'oso'=>3];

    print_r(array_key_exists('oso',$animales));

    echo "<br>";
    echo "<br>";

    /**
    * Todo in_array()
    * comprueba si el valor existe dentro de un array
    */
    echo "<h1>Método in_array()</h1>";
    $animales2 = ['pato','tigre','leon'];
    print_r(in_array('leon',$animales2));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_rand()
    * Devuelve 1 o varias claves aleatoriamente del array
    */
    echo "<h1>Método array_rand()</h1>";
    $hpotter = ['Drako','malphoy','Harry','Potter'];
    $resultado = array_rand($hpotter,2);
    print_r($resultado);
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_unique()
    * elimina los valores duplicados de un array y devuelve un array sin duplicados
    */
    echo "<h1>Método array_unique()</h1>";
    $bros = ['camilo','camilo','jeanfrank0','cesar','keanon','keanon'];
    print_r(array_unique($bros));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_intersect()
    * retorna el valor que se repite en los arrays que le pase como parámetros
    */
    echo "<h1>Método array_intersect()</h1>";
    $array1=['celular','tv','ps5','xbox'];
    $array2=['tablet','celular','switch','mp3'];
    print_r(array_intersect($array1,$array2));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_diff()
    * Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
    */
    echo "<h1>Método array_diff()</h1>";
    $array3=['vodka','tequila','cerveza','whiskey'];
    $array4=['vodka','tequila','cerveza'];
    print_r(array_diff($array3,$array4));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_push()
    * como en js agrega uno o más elementos al final de un array
    */
    echo "<h1>Método array_push()</h1>";
    $array5=['gow','crash','re4','elder ring'];
    array_push($array5,'silent hill');
    print_r($array5);
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_pop():
    * Elimina el ultimo elemento de un array
    */
    echo "<h1>Método array_pop()</h1>";
    array_pop($array5);
    print_r($array5);
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_reverse():
    * Revierte el orden de los elementos en un array, devuelve un array
    */
    echo "<h1>Método array_reverse()</h1>";
    $array_reverse = array_reverse($array5,true);
    print_r($array_reverse);
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_product():
    * Devuelve el producto de los valores de un array
    */
    echo "<h1>Método array_product()</h1>";
    $n=[1,2,3,4,5,6,7,8,9,10];
    $resultado = array_product($n);
    echo $resultado;
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_chunk():
    * Divide un array en fragmentos más pequeños por el parametro que le pase
    */
    echo "<h1>Método array_chunk()</h1>";
    print_r(array_chunk($n,2));
    echo "<br>";
    echo "<br>";

    /**
    * Todo array_keys():
    * Devuelve todas las claves(keys) de un array
    */
    echo "<h1>Método array_keys()</h1>";
    $array6 = array(
        'jett' => 1,
        'cypher' => 2,
        'astra' => 3,
        'kay0' =>4,
        'reyna' => 5
    );
    print_r(array_keys($array6));
    echo "<br>";
    echo "<br>";

     /**
    * Todo array_values():
    * Devuelve todos los valores de un array
    */
    echo "<h1>Método array_values()</h1>";

    print_r(array_values($array6));
    echo "<br>";
    echo "<br>";

     /**
    * Todo array_walk():
    * Aplica una función de devolución de llamada a cada elemento de un array
    */
    echo "<h1>Método array_walk()</h1>";

    $frutas = array(
        'fruta 1 ' => 'manzana',
        'fruta 2 ' => 'pera',
        'fruta 3 ' => 'mandarina',
    );
    
    function walk ($key,$value){
        echo "$value : $key ";
    };

    print_r(array_walk($frutas,"walk"));
    
?>