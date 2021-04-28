<?php
require('other-file.php');
include('other-file.php');

require_once('other-file.php');
include_once('other-file.php');

// Adición (+)
$number1 = 10;
$number2 = 46;
$result = $number1 + $number2;
echo $result . "<br>";

// Sustracción (-)
$number1 = 50;
$number2 = 10;
$result = $number1 - $number2;
echo $result . "<br>";

// Multiplicación (*)
$number1 = 50;
$number2 = 10;
$result = $number1 * $number2;
echo $result . "<br>"; // 500

// División (/)
$number1 = 50;
$number2 = 10;
$result = $number1 / $number2;
echo $result . "<br>"; // 5

// Módulo (%) -> El resto de dividir 2 números
$number1 = 55;
$number2 = 10;
$result = $number1 % $number2;
echo $result . "<br>"; // 5

// Potencia (**)
$number1 = 55;
$number2 = 10;
$result = $number1 ** $number2;
echo $result . "<br>"; // 253295162119140625

// Operador +=
$number3 = 10; // 10
// $number3 = $number3 + 5; // 15
$number3 += 5;
//echo $number3;

// Operador -=
$number4 = 10; // 10
//$number4 = $number4 - 5; // 5
 $number4 -= 5;
echo $number4;

// Estructuras condicionales

/**
 * Si la condición dados es verdadera
 * entonces
 * ejecuta una o más sentencias
 */

 /*
 if (condicion) {
   statement1
   statement2
 }*/

 $number = 10;
 if ($number == 25) { // == <- significa es igual a
  echo "La condición se evaluó verdadera";
 }

 $number = 8;
 if ($number == 10) { // == <- significa es igual a
  echo "El número es 10"; // 1º
 } else { // else <- en caso contrario
  echo "El número no es 10"; // 2º
 }

 $number = 10.00000000000000099; // 2^16
 if ($number == 10) { // == <- significa es igual a
  echo "El número es 10"; // 1º
 } elseif ($number == 8) {
  echo "El número es 8"; // 2º
 } else { // else <- en caso contrario
  echo "El número no es 10 ni 8"; // 3º
 }

 var_dump($number == 10);

 // Switch

 /**
 * switch(condicion)
 * case 1: 
 *   statement1
 * case 2:
 *   statement2
 * default:
 *   statementXDefault
*/

$word = "camp";
 switch (trim($word)) {
  case "free":
      echo "word is free"; // 1º
      break;
  case "code":
      echo "word is code"; // 2º
      break;
  case "camp":
      echo "word is camp <br>"; // 3º
      break;
  default:
      echo "word is not free, code neither camp"; // 4º
      break;
}

// ltrim() <- Left Trim
// rtrim() <- Right Trim

// var_dump($word == "camp"); " camp "

// Estructuras de repetición
// While (mientras)

/** 
 * while (condicion) {
 * statement1
 * }
*/

/* $number = 1;
 while ($number <= 10) {
 	echo $number++ . "<br>";
 } */

$number = 1; 
while($number <= 10) {
  echo $number . "<br>";
  $number++;
}

echo 1 . "<br>";
echo 2 . "<br>";
echo 3 . "<br>";
echo 4 . "<br>";
echo 5 . "<br>";
echo 6 . "<br>";
echo 7 . "<br>";
echo 8 . "<br>";
echo 9 . "<br>";
echo 10 . "<br>";

// do while

/*
* do {
* statement1
* } while (condicion)
*/
echo "========= <br>";

$number = 1;

do {
  echo $number++ . "<br>";
} while ($number <=10);

// For Loop

echo "========= <br>";

for ($i = 1; $i < 11; $i++) {
  if ($i == 10) {
    echo "$i";
  } else {
    echo "$i, ";
  }
}

// Array Indexed ()
$carBrands = array(
    'Subaru', 'Toyota', 'Lexus', 'Tesla', 'Jaguar', 'Ferrari', 'Lamborghini');

//echo count($carBrands);
// var_dump($carBrands);

echo "========= <br>";

foreach ($carBrands as $key => $value) {
  echo "Indice: $key" . " Valor: $value <br>";
} 

// Break

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break; // STOP!!!!!!
  }
  echo "The number is: $x <br>";
}

// Continue

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue; // SALTARSE!!!
  }
  echo "The number is: $x <br>";
}


?>