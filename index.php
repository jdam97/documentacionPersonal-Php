<?php
/**
 * todo Interfaces PHP
 */

 interface Figura
 {
     public function calcularArea();
 }
 interface Figura3D extends Figura
 {
     public function calcularVolumen();
 }
 class Cubo implements Figura3D
 {
     public function __construct(private int $lado)
     {
     }
     public function calcularArea()
     {
         return 6 * pow($this->lado, 2);
     }
     public function calcularVolumen()
     {
         return pow($this->lado, 3);
     }
 }
 $cubo = new Cubo(3);
 echo $cubo->calcularArea();
 echo $cubo->calcularVolumen();