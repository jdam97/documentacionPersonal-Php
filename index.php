<?php
/**
 * *Polimorfismo
 */
 interface TransporteInterfaz
 {
     public function getInfo(): string;
     public function getRuedas(): int;
 }
 class Transporte implements TransporteInterfaz
 {
     public function __construct(protected int $ruedas, protected int $capacidad)
     {
     }
     public function getInfo(): string
     {
         return "El transporte cuenta con " . $this->ruedas . " ruedas y tiene una capacidad de " . $this->capacidad . " personas.";
     }
     public function getRuedas(): int
     {
         return $this->ruedas;
     }
 }
 class Automovil extends Transporte implements TransporteInterfaz
 {
     public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
     {
     }
     public function getInfo(): string
     {
         return "El auto cuenta con " . $this->ruedas . " ruedas y tiene una capacidad de " . $this->capacidad . " personas. Aparte es de color " . $this->color;
     }
     public function getColor()
     {
         return "El color es: " . $this->color;
     }
 }
 $transporte = new Transporte(8, 20);
 $bmw = new Automovil(4, 5, "Negro");
 echo $transporte->getInfo();
 echo $bmw->getInfo();
 echo $bmw->getColor();