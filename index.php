<?php
/*
 * Autoload 
 */
 function my_autoload($clase)
 {
     require __DIR__ . '/clases/' . $clase . '.php';
 }
 spl_autoload_register('my_autoload');
 $detalles = new Detalles();
 $clientes = new Clientes();