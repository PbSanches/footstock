<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css"/>
    <title>CADASTRO</title>
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
    
    <section class="area-cadastro">  
        
        <div class="cadastro">
    
            <form action="salvaCadastro.php" method="POST">
                <input type="text" name="nome" placeholder="*Nome Completo"> <br>
                <input type="text" name="cpf" placeholder="*CPF"> <br>
                <br> <hr> <br>
                <p>Endereço de envio: </p>
                <input type="text" name="estado" placeholder="*Estado"> <br>
                <input type="text" name="cidade" placeholder="*Cidade"> <br>
                <input type="text" name="bairro" placeholder="*Bairro/Distrito"> <br>
                <input type="text" name="rua" placeholder="*Rua/Avenida"> <br>
                <input type="text" name="numero" placeholder="*Número Residencial"> <br>
                <input type="text" name="numero" placeholder="*Número Residencial"> <br>
                <br> <hr> <br>
                <input type="text" name="email" placeholder="*E-mail"> <br>
                <input type="text" name="senha" placeholder="*senha (Mínimo 6 caracteres)"> <br>
                    <p></p>
                    <p></p>
            <center>    
                    <div clas="checkbox">
                <input type="checkbox" name="informacoes" id="1">
                <label for="informacoes">Desejo receber promoções, novidades e informações da FOOT STOCK .</label>
                    <br> <hr> <br> 
                <input type="checkbox" name="politica" id="2">
                <label for="politica">Li e aceito a Política de Privacidade e Proteção de Dados da FOOT STOCK e os Termos de Uso.</label>            
                    <p></p>
                     <hr> <br>
                <input type="radio" name="robo"> 
                <label>NÃO SOU UM ROBÔ</label>
                    </div>
            </center>
                    <p></p>
                <input type="submit" value="Cadastrar">   
            </form>           
        </div>
        <section class="bagulhos">      
            <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
            <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
            <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
            <img src="https://i.imgur.com/j4eeRlt.png" class="montanhas_front">
            
        </section>
</section>  

</body>
</html>