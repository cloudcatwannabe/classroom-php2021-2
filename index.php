<?php
// Single line comment
/*
* Multiple line comment
*/

// Declarando una variable de nombre firstName
// Recordar nomenclatura CamelCase
$firstName = "Lino";
$lastName = "Espinoza";
$age = 34;
$price = 150.45;
$notMarried = false;
$hasMoney = ""; // vacío
$variableNull = null; // null

$firstName = "Aaron";

// Declarando una constante
define("PI", 3.1415926535);
const EPSILON = 2.71828; // > PHP 5.6.0

// Strings o cadenas de caracteres

// $tipoVariable = gettype($firstName);
// echo($tipoVariable);

// Arrays
$fruits = array('banana', 'apple', 'orange', 'watermellon', 'pineapple');


echo(gettype($firstName)); // string
echo(gettype($lastName)); // string
echo(gettype($age)); // integer
echo(gettype($price)); // double 
echo(gettype($notMarried)); // boolean 
echo(gettype($variableNull)); // NULL 
echo(gettype(EPSILON)); // double
echo(gettype($fruits)); // array  

?>
<html>
  <head>
    <title>Sesion 2 - Programación PHP</title>
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  <!-- Aquí debería poder imprimir en pantalla el nombre de la
  variable firstName -->
  <h1><?php echo($firstName . " " . $lastName); ?></h1> <!-- . concatenar -->
  <p><?php echo($age); ?></p>
  <p><?php echo($notMarried); ?></p>
  <p><?php echo(PI); ?></p>
  <p><?php print_r($fruits); ?></p>
  <p><?php var_dump($fruits); ?></p>
  <p><?php echo($fruits[0]); ?></p> <!-- banana -->
  <script src="js/main.js"></script>
  </body>
</html>
