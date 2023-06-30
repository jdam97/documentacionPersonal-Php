<?php
/*
 * Herencia POO
 */

class Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }
    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}
class Bicicleta extends Transporte
{
    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas Y NO GASTA GASOLINA.";
    }
}
class Automovil extends Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }
    public function getTransmision()
    {
        return $this->transmision;
    }
}
$mercedes = new Automovil(4, 5, "Manual");
echo $mercedes->getInfo();
echo $mercedes->getTransmision();
$bmx = new Bicicleta(2, 1);
echo $bmx->getInfo();