<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <nav class="navbar navbar navbar-fixed-top bg-primary">
        <h1>Cliente</h1>
        <table width="100%">
            <tr>
                <td>
                    <a href="#" data-toggle="modal" data-target="#myModal">Meus dados</a> |
                    <a href="listarSolicCasaCliente.php" target="centro">Solicitações residenciais enviadas</a> |
                    <a href="listarSolicEmpresaCliente.php" target="centro">Solicitações empresariais enviadas</a> |
                    <a href="formSolicServCliente.php" target="centro">Limpeza Residencial</a> |
                    <a href="formSolicServClienteEmp.php" target="centro">Limpeza Empresarial</a> |
                    <a href="#" data-toggle="modal" data-target="#configConta">Configurações de conta</a> 
                </td>
        </table>
        </nav>
        <div class="container">
            <div class="modal fade" id="myModal" role="dialog" style="background-color: black;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Meus dados</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                            if (isset($_SESSION["usuario"])) {
                                 /*echo "Id: ", $_SESSION["idCliente"];
                                 echo "<br>";*/
                                echo "Usuário: ", $_SESSION["usuario"];
                                echo "<br>";
                                echo "Perfil: ", $_SESSION["perfil"];
                                echo "<br>";
                                echo "Nome: ", $_SESSION["nomeCliente"];
                                echo "<br>";
                                echo "Email: ", $_SESSION["emailCliente"];
                                echo "<br>";
                                echo "Celular: ", $_SESSION["celularCliente"];
                                echo "<br>";
                                echo "CPF: ", $_SESSION["cpfCliente"];
                                echo "<br>";
                                echo "CEP: ", $_SESSION["cepCliente"];
                                echo "<br>";
                                echo "Endereço: ", $_SESSION["enderecoCliente"];
                                echo "<br>";
                                echo "Complemento: ", $_SESSION["complementCliente"];
                                echo "<br>";
                                echo "Número: ", $_SESSION["numeroCliente"];
                                echo "<br>";
                                echo "Bairro: ", $_SESSION["bairroCliente"];
                                echo "<br>";
                                echo "Cidade: ", $_SESSION["cidadeCliente"];
                                echo "<br>";
                                echo "Estado: ", $_SESSION["estadoCliente"];
                            }
                            ?>


                        </div>
                        <div class="modal-footer">
                            <center>
                                Deseja fazer logout?
                                <br>
                                <br>
                                <a href="../controller/logoffController.php" class="btn btn-success" title="Fazer logout!">Sim</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Fechar janela!">Não</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="modal fade" id="configConta" role="dialog" style="background-color: black;">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 align="center" class="modal-title">Configurações de conta</h4>
                        </div>
                        <div align="center" class="modal-body">
                            <a href="formAltCadastroCliente.php" class="btn btn-info" title="Atualizar dados!">Atualizar dados</a>
                            <a href="../controller/excluirContaClienteByIdController.php" class="btn btn-danger" title="Excluir conta!">Excluir conta</a>
                            <button align="center" type="button" class="btn btn-warning" data-dismiss="modal" title="Fechar janela!">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>