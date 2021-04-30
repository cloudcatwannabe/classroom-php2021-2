<?php

$array = array(); // Array vacío

$fruits = array('banana', 'orange', 'apple'); 
var_dump($fruits);
// Array asociativo
$age = array("Peter" => "100" , "Ben"=> "37", "Joe"=> "43");

// var_dump($age);

foreach($age as $indice => $value) {
  // echo 'Indice: '. $indice . ' Valor: '.$value. "<br>";
}

// Array multidimensional (más de una dimensión). Es una estructura compuesta
// por elementos de tipo array

$cars = array(
  array("Volvo",22,18), // Marca, stock, sold
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);



for ($i = 0; $i < 4; $i++) {  
  for ($y = 0; $y < 3; $y++) {
    switch($y) {
      case 0: echo $cars[$i][$y] . ": "; break;
      case 1: echo ' In stock: ' . $cars[$i][$y]; break;
      case 2: echo ' Sold :' . $cars[$i][$y]; break;
      default: break;
    }
  }
  echo '<br>';
}

// TODO // Tarea 1 
// Iterar el array cars e imprimir en pantalla los elementos de cada uno de los arrays.
// usando la estructura foreach()

// Se espera la siguiente estructura:

/* 
Volvo: In stock: 22 Sold: 18
BMW: In stock: 15 Sold: 13
Saab: In stock: 5 Sold: 2
Land Rover: In stock: 17 Sold: 15
*/

//asort($fruits);
//arsort($fruits);
//var_dump($fruits);

//ksort($fruits);
krsort($fruits);
var_dump($fruits);


// Funciones
// phpinfo();

// https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc-tags.md#59-param
/**
 * Returns the addition of the numbers that being passed as arguments
 *
 * @param float $numberOne Primer número
 * @param float $numberTwo Segundo número
 * 
 * @return float Returns the addition.
 */
function addTwoNumbers(float $numberOne, float $numberTwo) : float {
  return $numberOne + $numberTwo;
}

echo addTwoNumbers(10.5, 11);

?>