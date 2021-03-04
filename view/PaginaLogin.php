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
        
    <center>
        
                        
                        
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
            <br> <br> <br>
            <img src="../imagens/logo.jpg" width="500" height="300">
            
            <form action="../controller/loginController.php" method="POST">
              <div class="row"><br>
                <div role="main" class="col-md-6 col-md-push-3" style="text-align: center">
                    <table class="table" style="text-align: center">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"><h3>LOGIN</h3></th>                   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>USUÁRIO</td>
                                <td><input class="input_txt" type="text" name="usuario" placeholder="   Nome de Usuário" value="" size="20"></td>
                            </tr>
                            <tr>
                                <td>SENHA</td>
                                <td><input class="input_txt" type="password" name="senha" placeholder="   Mínimo 6 caracteres" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>PERFIL</td>
                                <td>
                                    <input type="radio" name="perfil" value="1" required=""> Administrador |
                                    <input type="radio" name="perfil" value="2"> Cliente |
                                    <input type="radio" name="perfil" value="3"> Profissional
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" style="text-align: center">
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="submit" value="Logar" class="btn btn-success"/>&nbsp; &nbsp; &nbsp;
                                    <input type="reset" value="Cancelar" class="btn btn-danger"/>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <aside role="complementary" class="col-md-3 col-md-push-3"></aside>
                    <nav class="col-md-3 col-md-pull-9"></nav>
                </div> 
            </form>   
        </div>
</center>
<center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
</body>
</html>
