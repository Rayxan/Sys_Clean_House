<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clean House | Limpeza Residencial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar navbar-fixed-top bg-primary">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="PaginaInicial.php">Clean House | Limpeza Residencial</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastre-se <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="formCadastrarCliente.php" id="ctexto"><span class="glyphicon glyphicon-user"></span> Cliente</a></li>
                            <li><a href="formCadastrarProfissional.php" id="ctexto"><span class="glyphicon glyphicon-user"></span> Profissional</a></li>
                        </ul>
                    <li><a href="PaginaLogin.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
                </ul>
            </div>
            </nav>
        </div>
        <div class="container"><br><br><br><br>
            <script>
                $(document).ready(function ()
                {
                    $('.carousel').carousel
                            ({
                                interval: 3000
                            })
                });
            </script>
            <div id="carousel-example-generic" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive img-full"
                             src="../imagens/Imagem3.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>PROFISSIONAIS CREDENCIADOS</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full"
                             src="../imagens/Imagem4.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>GARANTIA DE SATISFAÇÃO</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full"
                             src="../imagens/Imagem5.jpg" alt="">
                        <div class="carousel-caption">
                            <h1>ATENDIMENTO IMEDIATO</h1>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
        </div>    
    </body>
</html>
