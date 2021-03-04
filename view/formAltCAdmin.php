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
    require_once '../dao/clienteDAO.php';

    $idcliente = $_GET["idCliente"];
    $clienteDAO = new ClienteDAO();
    $cliente = $clienteDAO->getClienteById($idcliente);


    //echo $cliente["idCliente"];
    ?>
    <body width="100%" height="1000px">
        <form action="../controller/alterarCAdmController.php" method="POST">
            <div class="row">
                <div role="main" class="col-md-6 col-md-push-3" style="text-align: center">
                    <table border="1" class="table table-striped" style="text-align: left">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center"><h3>CADASTRO DE CLIENTE<br>FORMULÁRIO DE ATUALIZAÇÃO</h3></th>                   
                            </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" name="idCliente" value="<?php echo $cliente["idCliente"] ?>"/>
                        <tr>
                            <td>NOME</td>
                            <td><input class="input_txt" type="text" name="nomeC" value="<?php echo $cliente["nomeCliente"] ?>" size="54"></td>
                        </tr>
                        <tr>
                            <td>E-MAIL</td>
                            <td><input class="input_txt" type="email" name="emailC" value="<?php echo $cliente["emailCliente"] ?>" size="54"></td>
                        </tr>
                        <tr>
                            <td>CELULAR</td>
                            <td><input class="input_txt" type="tel" name="celularC" value="<?php echo $cliente["celularCliente"] ?>" size="20"/></td>
                        </tr>
                        <tr>
                            <td>CPF</td>
                            <td><input class="input_txt" type="text" name="cpfC" value="<?php echo $cliente["cpfCliente"] ?>" size="20" /></td>
                        </tr>
                        <tr>
                            <td>CEP</td>
                            <td><input class="input_txt" type="text" name="cepC" value="<?php echo $cliente["cepCliente"] ?>" size="20" /></td>
                        </tr>
                        <tr>
                            <td>ENDEREÇO</td>
                            <td><input class="input_txt" type="text" name="enderecoC" value="<?php echo $cliente["enderecoCliente"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <td>COMPLEMENTO</td>
                            <td><input class="input_txt" type="text" name="complementoC" value="<?php echo $cliente["complementCliente"] ?>" size="20" /></td>
                        </tr>
                        <tr>
                            <td>NÚMERO</td>
                            <td><input class="input_txt" type="text" name="numeroC" value="<?php echo $cliente["numeroCliente"] ?>" size="20" /></td>
                        </tr>
                        <tr>
                            <td>BAIRRO</td>
                            <td><input class="input_txt" type="text" name="bairroC" value="<?php echo $cliente["bairroCliente"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <td>CIDADE</td>
                            <td><input class="input_txt" type="text" name="cidadeC" value="<?php echo $cliente["cidadeCliente"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <td>ESTADO</td>
                            <td><input class="input_txt" type="text" name="estadoC" value="<?php echo $cliente["estadoCliente"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <td>USUÁRIO</td>
                            <td><input class="input_txt" type="text" name="usuarioC" value="<?php echo $cliente["usuario"] ?>" size="54" /></td>
                        </tr>
                        <tr>
                            <td>SENHA</td>
                            <td><input class="input_txt" type="password" name="senhaC" value="<?php echo $cliente["senha"] ?>" size="54" /></td>
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
