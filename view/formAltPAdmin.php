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
    require_once '../dao/profissionalDAO.php';
    
    $idprofissional = $_GET["idProfissional"];
    $profissionalDAO = new ProfissionalDAO();
    $profissional = $profissionalDAO->getProfissionalById($idprofissional);
    
    
    //echo $cliente["idCliente"];
   
    ?>
    <body width="100%" height="1000px">
        <form action="../controller/alterarPAdmController.php" method="POST">
            <div class="row">
                <div role="main" class="col-md-6 col-md-push-3" style="text-align: center">
                    <table border="1" class="table table-striped" style="text-align: left">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"><h3>CADASTRO DE PROFISSIONAL<br>FORMULÁRIO DE ATUALIZAÇÃO</h3></th>                   
                            </tr>
                        </thead>
                        <tbody>
                            <input type="hidden" name="idProfissional" value="<?php echo $profissional["idProfissional"]?>"/>
                            <tr>
                                <td>NOME</td>
                                <td><input class="input_txt" type="text" name="nomeP" value="<?php echo $profissional["nomeProfissional"]?>" size="54"></td>
                            </tr>
                            <tr>
                                <td>E-MAIL</td>
                                <td><input class="input_txt" type="email" name="emailP" value="<?php echo $profissional["emailProfissional"]?>" size="54"></td>
                            </tr>
                            <tr>
                                <td>CELULAR</td>
                                <td><input class="input_txt" type="tel" name="celularP" value="<?php echo $profissional["celularProfissional"]?>" size="20"/></td>
                            </tr>
                            <tr>
                                <td>CPF</td>
                                <td><input class="input_txt" type="text" name="cpfP" value="<?php echo $profissional["cpfProfissional"]?>" size="20" /></td>
                            </tr>
                            <tr>
                                <td>CEP</td>
                                <td><input class="input_txt" type="text" name="cepP" value="<?php echo $profissional["cepProfissional"]?>" size="20" /></td>
                            </tr>
                            <tr>
                                <td>ENDEREÇO</td>
                                <td><input class="input_txt" type="text" name="enderecoP" value="<?php echo $profissional["enderecoProfissional"]?>" size="54" /></td>
                            </tr>
                            <tr>
                                <td>COMPLEMENTO</td>
                                <td><input class="input_txt" type="text" name="complementoP" value="<?php echo $profissional["complementProfissional"]?>" size="20" /></td>
                            </tr>
                            <tr>
                                <td>NÚMERO</td>
                                <td><input class="input_txt" type="text" name="numeroP" value="<?php echo $profissional["numeroProfissional"]?>" size="20" /></td>
                            </tr>
                            <tr>
                                <td>BAIRRO</td>
                                <td><input class="input_txt" type="text" name="bairroP" value="<?php echo $profissional["bairroProfissional"]?>" size="54" /></td>
                            </tr>
                            <tr>
                                <td>CIDADE</td>
                                <td><input class="input_txt" type="text" name="cidadeP" value="<?php echo $profissional["cidadeProfissional"]?>" size="54" /></td>
                            </tr>
                            <tr>
                                <td>ESTADO</td>
                                <td><input class="input_txt" type="text" name="estadoP" value="<?php echo $profissional["estadoProfissional"]?>" size="54" /></td>
                            </tr>
                             <tr>
                                <td>USUÁRIO</td>
                                <td><input class="input_txt" type="text" name="usuarioP" value="<?php echo $profissional["usuario"]?>" size="54" /></td>
                            </tr>
                            <tr>
                                <td>SENHA</td>
                                <td><input class="input_txt" type="password" name="senhaP" value="<?php echo $profissional["senha"]?>" size="54" /></td>
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
