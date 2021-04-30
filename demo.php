<?php
// echo es un función para imprimir en pantalla una estructura
/*
Esto es un comentario
de más de una línea
commentarios
*/
echo "Mi nombre es Lino Espinoza";
// Constante
const NOMBRE = "Javier";

// Variable
$mainAddress = "Calle Baltazar 345 Miraflores";

// Booleans
$variableBooleana = FALSE;
$isTrue = TRUE;

// String
$nombreCompleto = "Lino Espinoza Fernández";
$apellidoMaterno = 'Fernández';
$textoVacio = "";


// Integer
$numeroEntero = 10;

// Double
$numeroDecimalConUnDigito = 10.5;
$numeroDecimalConDosDigitos = 10.54;
$numeroDecimalConTresDigitos = 10.543;

// Arrays 
$frutas = ['manzana','pera','plátano','uva'];
$manzana = $frutas[3];

$comidas = [
  0 => 'Papa a la huancaina',
  "1" => 'Lomo saltado',
  1.5 => "Sopa seca",
  false => "Cau cau"
];

// Nulo
$variableNula = NULL;

// Operadores Aritméticos
$primerNumero = 3;
$segundoNumero = 5;

$texto = "Hola";
$parrafo = "Mundo";

$suma = $primerNumero + $segundoNumero;
$resta = $primerNumero - $segundoNumero;
$producto = $primerNumero * $segundoNumero;
$cociente = $primerNumero / $segundoNumero;
$modulo = $primerNumero % $segundoNumero;
$potencia = $primerNumero ** $segundoNumero;

// Operadores de asignación
$tercerNumero = 6;
$tercerNumero += 5;
$tercerNumero -= 1;

$saludo = "Hola " . "buenas noches";
$saludo .= ", buenas noches";
echo $saludo;

// && -> AND (Proposición Y)
// || -> OR (Proposición O)
// $tercerNumero && FALSE

?>
<html>
  <body>
  <h1>Estoy en la clase de programación php</h1>
  <p><?php echo $potencia; ?></p>
  <p><?php echo gettype($variableNula); ?></p>


  <?php var_dump($frutas); ?>
  <?php print_r($frutas); ?>
  </body>
</html>

<?php
// Operadores de comparación (==, ===, != , <>, !==, >, <, >=, <=)

// == -> Igual a 
$primerNumero = 100;
$segundoNumero = 100;
var_dump($primerNumero == $segundoNumero);

// == -> Igual a 
$primerNumero = 100;
$segundoNumero = '100';
var_dump($primerNumero == $segundoNumero);

// === -> Identico a (Valor, Tipo de dato) 
$primerNumero = 100;
$segundoNumero = '100';
var_dump($primerNumero === $segundoNumero);

// != -> No es Igual a 
$primerNumero = 100;
$segundoNumero = 200;
var_dump($primerNumero != $segundoNumero);

// <> -> No es Igual a 
$primerNumero = 100;
$segundoNumero = 200;
var_dump($primerNumero <> $segundoNumero);

// !== -> No es identico a (Valor, Tipo de dato) 
$primerNumero = 100; // Integer
$segundoNumero = '100'; // String
var_dump($primerNumero !== $segundoNumero);

// = Mayor igual que
$primerNumero = 100;
$segundoNumero = 100;
var_dump($primerNumero >= $segundoNumero);

// Incremento -- Decremento

// Pre Incremento: ++$increment (Incrementa $inc en 1 y luego retorna $inc)
$indice = 10;
echo ++$indice;

// Post Incremento: $increment++ (Retorna $inc y luego incrementa $inc en 1)
$indice = 10;
echo $indice++;
echo $indice;

// Pre Decremento:
$indice = 10;
echo --$indice;

// Pre Decremento:
$indice = 10;
echo $indice--;
echo $indice;

// Operador Y / AND (&&) (Es verdadero si $x y $y son verdaderos)
$x = 100;  
$y = 50;
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}

// Operador "O" / OR (||)
$x = 100;  
$y = 50;
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}

// Operador Negación / NOT (!)
$x = 100;  
if ($x !== 90) {
    echo "Hello world!";
}

// Concatenación Strings

// 
$primerNombre = "Lino";
$apellidoPaterno = "Espinoza";
$apellidoMaterno = "Fernández";

$nombreCompleto = $primerNombre .' '. $apellidoPaterno .' '. $apellidoMaterno;
echo $nombreCompleto;

// Estructura Condicional (IF)
/* 
if (condition) {
   code to be executed if this condition is true;
} else {
   code to be execute if this condition is false;
}
*/
// Miguel
$miguel = 10;
if ($miguel > 25) {
    echo "You Winner";
} elseif ($miguel == 18) {
    echo "You Play Again" ;
} else { echo "You lose"; }

switch ($miguel) {
    case $miguel > 25:
      echo " You Winner";
      break;
    case $miguel == 18:
      echo "You Play Again ";
      break;
    default:
      echo "You Looser";
  }

// Elsa
$edad = 15;
if ($edad >= 18) {
    echo "Es mayor de edad";
} elseif ($edad == 80) {
    echo "Es Miguel";
} else {
    echo "Es menor de edad";
}
switch ($edad) {
  case ($edad >= 18):
    echo "Es mayor de edad";
    break;
  case $edad == 80:
    echo "Es Miguel";
  break;
  default:
    echo "Es menor de edad";

}
// Gustavo
/*
$edadHermano = 20;
$edadPrimo = 15;
if ($edadHermano < $edadPrimo) {
  echo "Hermano"; 
} else {
  echo "Primo";
} */
$NotaBimetre1 = 15;
$NotaBimetre2 = 18;
$practica = 13;

if ($NotaBimetre1 > $NotaBimetre2) {
    echo "Superaste el Nivel"; 
} elseif ($NotaBimetre1 < $practica) {
    echo "No Superaste el Nivel";
}  else {
  echo "Nivel No Logrado";
}

/* 
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed
}
*/

$dia = 3;
    switch($dia){
        case 0: 
            echo "Lunes";
            break;  
        case 1:
            echo "Martes";
            break;  
        case 2: 
            echo "Miercoles";
            break;  
        case 3: 
            echo "Jueves";
            break;  
        case 4:
            echo "Viernes";
            break;  
        case 5: 
            echo "Sabado";
            break; 
        default:
            echo "Domingo";
            
    }
// Switch
/*
switch (variableAEvaluar) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
*/

// While Loop
/*
while (condition is true) {
  code to be executed;
}
*/

$numero = 10;
while ($numero < 25) {
  echo $numero;
  $numero++;
}

// Do While Loop
/*
do {
  code to be executed;
} while (condition is true);
*/

$expresion = 10;
do {
  echo $expresion;
  $expresion++;
} while ($expresion < 25);

// For Loop
/*
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
*/

for ($i = 0; $i <= 10 ; $i++) { 
  echo $i;
}

// For each Loop
/*
foreach ($array as $value) {
  code to be executed;
}
*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

// Break

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

// Continue

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

// Sesion 4

//error_reporting(E_ALL);

// Array unidimensional
$array = array(); // Array vacío

for($x = 1; $x < 11; $x++) {
  $array[] = $x;
}

rsort($array);

print_r($array);

// print_r(array_count_values($array));

// print_r(array_slice($array, 4));
//print_r($array);

$cars = array("Volvo", "BMW", "Toyota");

$volvo = $cars[0];
$bmw = $cars[1];
$toyota = $cars[2];

// echo "I like " . $volvo . ", " . $bmw . " and " . $toyota . ".";

$arrLength = count($cars);

for($x = 0; $x < $arrLength; $x++) {
  echo $cars[$x]; // "Volvo" "BMW" "Toyota"
  echo "<br>";
}

// echo count($cars);
// Associative Arrays
$age = array("Peter"=>"100", "Ben"=>"37", "Joe"=>"43");

foreach($age as $indice => $value) {
  echo 'Indice: '. $indice . ' Valor: '.$value. "<br>";
}

asort($age);
ksort($age);
print_r($age);

// Arrays Multidimensionales
$cars = array (
  array("Volvo",22,18), // Marca, stock, sold <- [0]
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

//echo $cars[0][0];

/*
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
*/

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

$array = array(1,1,2,2,2,3,4,4);
$count = array_count_values($array);

foreach ($count as $number => $numberOfRepetitions) {
  //echo "El número: ". $number. " se repite ". $numberOfRepetitions . " veces <br>";
}

/**
 * function nameOfFunction($params, $params = null) {
 *   code to be executed
 *  return <informacion_a_retornar>
 * }
 */

// @TODO documentation de la function
function adicionDeNumeros(int $primerNumero, int $segundoNumero) : int {
    return $primerNumero + $segundoNumero;
}

echo adicionDeNumeros(5,4);

class Employee // Definición de clase
{
  private $firstName;
  private $lastName;
  private $age;

  public function __construct($firstName, $lastName, $age)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function getAge()
  {
    return $this->age;
  }
}

$empleado = new Employee('Lino', 'Espinoza', '34');
//echo gettype($empleado);
echo $empleado->getFirstName();
echo $empleado->getLastName();
echo $empleado->getAge();

$empleadoNocturno = new Employee('Mateo', 'Hinostroza', '19');
//echo gettype($empleado);
echo $empleadoNocturno->getFirstName();
echo $empleadoNocturno->getLastName();
echo $empleadoNocturno->getAge();

?>

?> 