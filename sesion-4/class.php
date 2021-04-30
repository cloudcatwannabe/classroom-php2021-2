<?php
// Class
// Programación Orientada a Objetos (POO / OOP)

class Frutas
{
  const CAN_BE_EATED = "Yes";
  private $name = 'Nombre por defecto';
  private $size;
  private $season;
  private $shape;

  // Getter
  public function getSize() {
    return $this->size;
  }

  // Setter
  public function setSize($size) {
    $this->size = $size;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getSeason() {
    return $this->season;
  }

  public function setSeason($season) {
    $this->season = $season;
  }

  public function getShape() {
    return $this->shape;
  }

  public function setShape($shape) {
    $this->shape = $shape;
  }
}

// Objeto (Es una instancia particular de una clase)

$fruta1 = new Frutas;
echo gettype($fruta1) . "<br >";

$name = $fruta1->getName();
$size = $fruta1->getSize();
//echo $name;
//echo $size;

$apple = new Frutas;
$apple->setName("Apple");
//$apple->name = "Apple"; // $apple->getName("Apple");
$apple->setSize("Medium");
$apple->setSeason("Summer");
$apple->setShape("Circle");


echo $apple->getName() . "<br>";  
echo $apple->getSize() . "<br>";
echo $apple->getSeason() . "<br>";
echo $apple->getShape() . "<br>";
echo "Can be eated?: " . $apple::CAN_BE_EATED . "<br>";

echo "=======" . "<br>";

$banana = new Frutas;
$banana->setName("Banana");
$banana->setSize("Small");
$banana->setSeason("Summer");
$banana->setShape("Crescent");

echo $banana->getName() . "<br>";  
echo $banana->getSize() . "<br>";
echo $banana->getSeason() . "<br>";
echo $banana->getShape() . "<br>";




?>