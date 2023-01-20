<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Document</title>
    </head>
    <body>
        <header>
            <a href="#" class="logo">FOOT STOCK</a>
            <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php" class="active">login</a></li>
            <li><a href="ListarProdutos.php">Produtos</a></li>
            <li><a href="anunciar.php" >Anunciar</a></li>
            <li><a href="carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="perfil.php">Meu Perfil</a></li>
            </ul>
        </header>
        <section>
            <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
            <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
            <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
            <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">
            
            <div >
                    <?php
                        $sql = "SELECT * FROM Produto";
                        $res = $conn-> query($sql);
                        while($row = $res-> fetch_object()) {
                            print "<option = '".$row-> ID."'>";
                            print $row-> Nome."</option";
                        }
                    ?>
            </div>
            <div class="formProdutos">
                <form method="post" action=""> 
                    <h1>Produtos</h1> 
                    <label for="cars">Categoria:</label>
                    <select name="categoria" id="cars">
                        <option value="esportivo">Esportivo</option>
                        <option value="casual">Casual</option>
                    </select>
                    <br>
                    <label for="cars">Cor:</label>
                    <select name="cor" id="cor">
                        <option value="quentes">Quente</option>
                        <option value="fria">Fria</option>
                        <option value="Colorido">Colorido</option>
                    </select>
                    <br>
                    <label for="cars">Tamanho:</label>

                    <input type = "number" id="Tamanho" name="Tamanho">
                    <br>
                      <input type="submit" value="Filtrar"/> 
                </form>
            </div>
        </section>
    </body>
</html>