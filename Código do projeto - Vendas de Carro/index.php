<!--
    @DEIVIDX_OFC
-->

<!DOCTYPE html>
<html lang="en">
<head>
        <title>RM - Veículos Especiais</title>
        <!--LINKS-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="imagens/icon-site/logo-icon.ico" type="image/x-icon">
        
        <!--METASTAGS-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Descrição do meu site">
        <meta name="keywords" content="palavra-chave, separadas, por, virgula">
        <meta name="author" content="Deivid">
</head>
<body>
    <header>
        <div class="container">
        <div class="logo">
            <img src="imagens/logo.jpg" alt="">
        </div><!--logo-->
        <nav class="desktop">
            <ul>
                <li><a style="color: #eb2d2d;" href="home">Home</a></li>
                <li><a href="venda">Vendas</a></li>
                <li><a href="sobre">Sobre</a></li>
                <li><a goto="contato" href="">Contato</a></li>
            </ul>
        </nav><!--desktop-->

        <nav class="mobile">
            <ul>
                <li><a style="color: #eb2d2d;" href="home">Home</a></li>
                <li><a href="venda">Vendas</a></li>
                <li><a href="sobre">Sobre</a></li>
                <li><a goto="contato" href="">Contato</a></li>
            </ul>
        </nav><!--mobile-->
        <div class="clear"></div>
    </div><!--container-->
    </header>

<?php
	if(isset($_GET['url'])){
        $url = $_GET['url'];
        if(file_exists($url.'.html')){
            header('Location: ' . $url . '.html');
            exit();
        }else{
            header('Location: 404.html');
            exit();
        }
    }else{
        header('Location: home.html');
        exit();
    }
?>

<footer>
        <div class="container">
            <nav >
                <ul>
                    <li><a style="color: #eb2d2d;" href="index">Home</a></li>
                    <li><a href="venda">Vendas</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav>

            <p>Todos os direitos reservados!</p>
            <div class="clear"></div>
        </div><!--container-->
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

<!--
    @DEIVIDX_OFC
-->