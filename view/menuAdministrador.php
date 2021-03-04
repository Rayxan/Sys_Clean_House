<!DOCTYPE html>
<html>
    <head>
        <title>Clean House | Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <nav class="navbar navbar navbar-fixed-top bg-primary">
        <h1>Administrador</h1>
        <table border="0" width="100%">
            <tr>
                <td>
                    <a href="#" data-toggle="modal" data-target="#myModal">Meus dados</a> |
                    <a href="formCadCAdm.php" target="centro">Cadastrar Cliente</a> |
                    <a href="listarAllCliente.php" target="centro">Listar Cliente</a> |
                    <a href="formCadPAdm.php" target="centro">Cadastrar Profissional</a> |
                    <a href="listarAllProfissional.php" target="centro">Listar Profissional</a> |
                    <a href="formCadAAdmin.php" target="centro">Cadastrar Administrador</a> |
                    <a href="listarAllAdministrador.php" target="centro">Listar Administrador</a> |
                    <a href="formSolicServAdmin.php" target="centro">Limpeza Residencial</a> |
                    <a href="formSolicServAdminEmp.php" target="centro">Limpeza Empresarial</a> |
                    <a href="listarAllSolicCasa.php" target="centro">Listar Solicitações Residenciais</a> |
                    <a href="listarAllSolicEmpresa.php" target="centro">Listar Solicitações Empresariais</a> |
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
                                //echo "Usuário: ", $_SESSION["idAdministrador"];
                                echo "Usuário: ", $_SESSION["usuario"];
                                echo "<br>";
                                echo "Perfil: ", $_SESSION["perfil"];
                                echo "<br>";
                                echo "Nome: ", $_SESSION["nomeAdmin"];
                                echo "<br>";
                                echo "Email: ", $_SESSION["emailAdmin"];
                                echo "<br>";
                                echo "CPF: ", $_SESSION["cpfAdmin"];
                                echo "<br>";
                                echo "Telefone: ", $_SESSION["telefoneAdmin"];
                                echo "<br>";
                               
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
                            <a href="formAltCadastroAdministrador.php" class="btn btn-info" title="Atualizar dados!">Atualizar dados</a>
                            <a href="../controller/excluirContaAdministradorByIdController.php" class="btn btn-danger" title="Excluir conta!">Excluir conta</a>
                            <button align="center" type="button" class="btn btn-warning" data-dismiss="modal" title="Fechar janela!">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
