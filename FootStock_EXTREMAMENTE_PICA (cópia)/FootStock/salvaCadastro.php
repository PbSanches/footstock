<?php
    include ("./conexao.php");
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_cadastro = $now = date_create('now')->format('Y-m-d H:i:s');
    $situacao = "A";

    $pattern = '/^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/';
    $source = $cpf;
    $result = preg_match($pattern, $source);
    if(!$result == true){
        print "<script> alert('insira um cpf correto'): </script>";
    }

    $pattern = '/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i';
    $source = $email;
    $result = preg_match($pattern, $source);
    if(!$result == true){
        print "<script> alert('insira um email correto correto'): </script>";
    }

    $pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{10,}$/';
    $source = $senha;
    $result = preg_match($pattern, $source);
    if(!$result == true){
        print "<script> alert('insira uma senha correto correto'): </script>";
    }

    $sql = " INSERT INTO Cliente(Nome, CPF, Email, Senha, Data_Cadastro, Situacao) 
             VALUES ({'$nome'}, {'$cpf'}, {'$email'}, {'$senha'}, {'$data_cadastro'}, {'$situacao'})
             INSERT INTO Endereco (Bairro, Rua, Cidade, Estado, Numero)
             VALUES ({'$bairro'}, {'$rua'}, {'$cidade'}, {'$estado'}, {'$numero'})";

    $res = $conn-> query($sql);

    if($res == true) {
        print "<script> alert('Cadastro com sucesso'): </script>";
        include('login.php');
    }
?>