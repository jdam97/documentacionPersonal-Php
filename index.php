<?php
/**
 todo Punto 14 Json_encode y json_decode
 */
     $producto = [
         [
             'nombre' => 'jonathansito',
             'precio' => 10000,
             'disponible' => true
         ],
         [
             'nombre' => 'kfc',
             'precio' => 5000,
             'disponible' => true
         ],
         [
             'nombre' => 'las tortugas ninja',
             'precio' => 2000,
             'disponible' => false
         ]
     ];

     
     /*
      * *json decode
      */
     $json = '{"nombre":"Pablo","edad":16,"ciudad":"cepita"}';
     $data = json_decode($json);
     var_dump($data);
     //json encode
     /*
      * json encode
      */
     var_dump($producto);
     $json = json_encode($producto, JSON_UNESCAPED_UNICODE);
     var_dump($json);
     /*
      * json decode a objeto o array asociativo
      */
     $json = '{"nombre":"Pablo","edad":16,"ciudad":"la esperanzada"}';
     $data = json_decode($json); //devuelve un objeto
     $data = json_decode($json, true); //devuelve un array asosiativo
