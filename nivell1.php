<?php

define('UTILS_LOCAL', '../sprint1-php-basics/utils.php');

if(file_exists(UTILS_LOCAL)){
    require UTILS_LOCAL;
} else {
    echo "<h1>❌ Error</h1> Ups! Falta un arxiu.";
    exit(1);
}

apartat(1);

abstract class Animal{

    protected string $gen;

    public function __construct(
        protected string $nom,
        protected string $gender
    ){
        $this->gen = strtolower($this->gender);

        if(strlen($this->gen) > 1 && $this->gen != "f" && $this->gen != "m"){
            echo "ep! l'animal no està ben definit.<br/>";
            exit(1);
        }
    }

    abstract function makeSound();
}

class Gos extends Animal{
    public function makeSound(){
        $str = $this->gen === 'f' ? "La gossa" : "El gos";
        echo "$str $this->nom fa 'bup, bup!' <br/>";
    }
}
class Gat extends Animal{
    public function makeSound(){
        $str = $this->gen === 'f' ? "La gata" : "El gat";
        echo "$str $this->nom fa 'meu!' <br/>";
    }
}

$gos = new Gos("Nera", "F");
$gat = new Gat("Festuc", "m");

function fesQueParli(Animal $animal){
    $animal->makeSound();
}

fesQueParli($gos);
fesQueParli($gat);
