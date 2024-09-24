<?php

define('UTILS_LOCAL', '../sprint1-php-basics/utils.php');

if(file_exists(UTILS_LOCAL)){
    require UTILS_LOCAL;
} else {
    echo "<h1>❌ Error</h1> Ups! Falta un arxiu.";
    exit(1);
}

abstract class Shape{
    public function __construct(
        protected float|null $ample = null,
        protected float|null $alt = null,
    ){}

    abstract function getArea();
}

class Triangle extends Shape{

    public function getArea(): float|null{
        if (!$this->ample || !$this->alt){
            return null;
        }
        return $this->ample * $this->alt / 2;
    }
}
class Rectangle extends Shape{

    public function getArea(): float|null{
        if (!$this->ample || !$this->alt){
            return null;
        }
        
        return $this->ample * $this->alt;
    }
}