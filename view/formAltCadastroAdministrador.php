<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/ValidarCEP.js" ></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title></title>
    </head>
    <?php
    session_start();
    require_once '../dao/administradorDAO.php';
    
    $idadministrador = $_SESSION["idAdministrador"];
    $administradorDAO = new AdministradorDAO();
    $administrador = $administradorDAO->getAdministradorById($idadministrador);


    //echo $administrador["idAdministrador"];
    ?>
    <body width="100%" height="1000px">
        <form action="../controller/alterarCadastroAdministrador.php" method="POST">
            <div class="row">
                <div role="main" class="col-md-6 col-md-push-3" style="text-align: center">
                    <table border="1"  class="table table-striped" style="text-align: left">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"><h3>CADASTRO DE ADMINISTRADOR<br>FORMULÁRIO DE ATUALIZAÇÃO</h3></th>                   
                            </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" name="idAdministrador" value="<?php echo $_SESSION["idAdministrador"] ?>"/>
                        <tr>
                            <td>NOME</td>
                            <td><input class="input_txt" type="text" name="nomeAdmin" value="<?php echo $administrador["nomeAdmin"] ?>" size="54"></td>
                        </tr>
                        <tr>
                            <td>CPF</td>
                            <td><input class="input_txt" type="text" name="cpfAdmin" value="<?php echo $administrador["cpfAdmin"] ?>" size="54"></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><input class="input_txt" type="email" name="emailAdmin" value="<?php echo $administrador["emailAdmin"] ?>" size="20"/></td>
                        </tr>
                        <tr>
                            <td>TELEFONE</td>
                            <td><input class="input_txt" type="tel" name="telefoneAdmin" value="<?php echo $administrador["telefoneAdmin"] ?>" size="20" /></td>
                        </tr>
                        <tr>
                            <td>USUÁRIO</td>
                            <td><input class="input_txt" type="text" name="usuarioA" value="<?php echo $administrador["usuario"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <td>SENHA</td>
                            <td><input class="input_txt" type="password" name="senhaA" value="<?php echo $administrador["senha"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center">
                                <input type="submit" value="Alterar" class="btn btn-success"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="submit" value="Cancelar" class="btn btn-danger"/>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <aside role="complementary" class="col-md-3 col-md-push-3"></aside>
                <nav class="col-md-3 col-md-pull-9"></nav>
            </div>
        </form>
    </body>
</html>
