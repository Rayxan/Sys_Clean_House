<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <nav class="navbar navbar navbar-fixed-top bg-primary">
        <h1>Profissional</h1>
        <table width="100%">
            <tr>
                <td>
                    <a href="#" data-toggle="modal" data-target="#myModal">Meus dados</a> |
                    <a href="listarAllSolicCasaProf.php" target="centro">Solicitações residenciais recebidas</a> |
                    <a href="listarAllSolicEmpresaProf.php" target="centro">Solicitações empresariais recebidas</a> |
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
                                //echo "ID: ", $_SESSION["idProfissional"];
                                echo "Usuário: ", $_SESSION["usuario"];
                                echo "<br>";
                                echo "Perfil: ", $_SESSION["perfil"];
                                echo "<br>";
                                echo "Nome: ", $_SESSION["nomeProfissional"];
                                echo "<br>";
                                echo "Email: ", $_SESSION["emailProfissional"];
                                echo "<br>";
                                echo "Celular: ", $_SESSION["celularProfissional"];
                                echo "<br>";
                                echo "CPF: ", $_SESSION["cpfProfissional"];
                                echo "<br>";
                                echo "CEP: ", $_SESSION["cepProfissional"];
                                echo "<br>";
                                echo "Endereço: ", $_SESSION["enderecoProfissional"];
                                echo "<br>";
                                echo "Complemento: ", $_SESSION["complementProfissional"];
                                echo "<br>";
                                echo "Número: ", $_SESSION["numeroProfissional"];
                                echo "<br>";
                                echo "Bairro: ", $_SESSION["bairroProfissional"];
                                echo "<br>";
                                echo "Cidade: ", $_SESSION["cidadeProfissional"];
                                echo "<br>";
                                echo "Estado: ", $_SESSION["estadoProfissional"];
                               
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
                            <a href="formAltCadastroProfissional.php" class="btn btn-info" title="Atualizar dados!">Atualizar dados</a>
                            <a href="../controller/excluirContaProfissionalByIdController.php" class="btn btn-danger" title="Excluir conta!">Excluir conta</a>
                            <button align="center" type="button" class="btn btn-warning" data-dismiss="modal" title="Fechar janela!">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>