<?php

define('NIVELL_2', './nivell2.php');

if(file_exists(NIVELL_2)){
    require NIVELL_2;
} else {
    echo "<h1>❌ Error</h1> Ups! Falta un arxiu.";
    exit(1);
}

apartat(1);

class Cercle extends Shape{

    public function __construct(
        protected float $radi
    ){
        parent::__construct($this->radi * 2, $this->radi * 2);
    }

    public function getArea(): int|float{
        return (($this->radi**2) * pi());
    }
}

echo "<h3>Instancies de Triangle, Rectangle i Cercle</h3>";
$triangle = new Triangle(2, 5);
$rectangle = new Rectangle(6, 2.9);
$cercle = new Cercle(5);

echo "El triangle de 2 x 5 té una àrea de: " . $triangle->getArea() . "<br/>";
echo "El rectangle de 6 x 2.9 té una àrea de: " . $rectangle->getArea() . "<br/>";
echo "El cercle de radi 5 té una àrea de: " . number_format($cercle->getArea(), 2, ".", " ") . "<br/>";
