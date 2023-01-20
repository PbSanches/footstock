<?php

    include ("./conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT Email AND Senha FROM Clinte WHERE Email= $email and Senha = $senha";
    $res = $conn-> query($sql);

    if(!$res == true) {
        print "<script> alert('senha ou email incorreto'): </script>";
    }
        $_SESSION['login'] = true;
        include('home.php');
    
?>