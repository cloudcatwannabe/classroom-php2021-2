<?php
  // var_dump($_POST);
  // Calcular la cantida de elementos del array $_POST
  $count = count($_POST);
  echo $count;
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $country = $_POST['country'];

  // $username = $_GET['username'];
  // $password = $_GET['password'];

  echo "El usuario: $username, tiene como password: $password y vive en $country";
?>