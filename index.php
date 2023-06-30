<?php
/**
 * todo Clases abstractas
 */

 abstract class Animal
 {
     abstract public function hacerSonido();
 }
 class Capibara extends Animal
 {
     public function __construct()
     {
     }
     public function hacerSonido()
     {
         echo "Glu, glu, glu.";
     }
 }
 class Camello extends Animal
 {
     public function __construct()
     {
     }
     public function hacerSonido()
     {
         echo "every go to the disco.";
     }
 }
 $chompiras = new Capibara();
 $tripaSeca = new Camello();
 $chompiras->hacerSonido();
 $tripaSeca->hacerSonido();