<?php
    $host = "localhost";
    $bancodedados = "matue";
    $usuario = "root";
    $senha = "1234";
  
  $con = mysqli_connect($host, $usuario, $senha,$bancodedados );
  $conn = new mysqli($host, $usuario, $senha, $bancodedados, "3306");
  if($conn->connect_errno) {
    echo "Falha ao conectar: (". $conn->connect_errno.")" . $conn->connect_error;
  }
?>