<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <title>Document</title>
</head>

<body>
        <?php
            if(!$_SESSION['login'] == true) {
                include('login.php');
            }
        ?>
    <header>
        <a href="#" class="logo">FOOT STOCK</a>
        <ul>
            <li><a href="front/home.php">Home</a></li>
            <li><a href="front/login.php" class="active">login</a></li>
            <li><a href="front/ListarProdutos.php">Produtos</a></li>
            <li><a href="front/anunciar.php" >Anunciar</a></li>
            <li><a href="front/carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="front/perfil.php">Meu Perfil</a></li>
        </ul>
    </header>

    <section class="area-login">
        <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
        <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
        <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
        <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">

        <div class="login">
            <form method="post" action="">
                <h1>Anunciar</h1>
                <label for="cars">Titulo do anuncio:</label>

                <input type="text" name="tituload" placeholder="Titulo do seu anuncio">
                <br>
                <select name="cor" id="categoria">
                    <?php
                        $sql = "SELECT Nome FROM Categoria";
                        $res = $conn-> query($sql);
                        while($row = $res-> fetch_object()) {
                            print "<option = '".$row-> FK_Categoria."'>";
                            print $row-> Nome."</option";
                        }
                    ?>
                </select>
                <label for="cars">Cor do seu tênis</label>
                <select name="cor" id="cor">
                    <option value="quentes">Quente</option>
                    <option value="fria">Fria</option>
                    <option value="Colorido">Colorido</option>
                </select>
                <br>    
                <label for="cars">Tamanho do seu tênis</label>

                <input type="number" id="Tamanho" name="Tamanho">
                <br>

                <label for="cars">Envie a foto do seu tênis</label>
                <input type="file" id="foto" name="foto" accept="image/png, image/jpeg">
                <?php

                    $foto = $_FILES["foto"];
                    $foto = explode('.',$foto);

                    if($foto[sizeof($foto)-1] != 'jpg') {
                        die('tipo de arquivo de arquivo não suportado');
                    }
                ?>
                <input type="submit" value="Anunciar" />
            </form>
        </div>
    </section>
<?php

    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $situacao = $_POST["situacao"];
    $cor = $_POST["cor"];
    $data_cadastro = $now = date_create('now')->format('Y-m-d H:i:s');

    $sql = "INSERT INTO Produtos (Nome, Descricao, Categoria, Situacao, Cor, Foto, Data_Cadastro)
     VALUES ({'$titulo'}, {'$descricao'}, {'$categoria'}, {'$situacao'}, {'$cor'}, {'$foto'}, {'$data_cadastro'})";

    $res = $conn-> query($sql);

    if($res == true) {
        print "<script> alert('Cadastro com sucesso'): </script>";
    }   
        print "<script> alert('Não foi possivel anunciar seu produto'): </script>";
?>
</body>

</html>