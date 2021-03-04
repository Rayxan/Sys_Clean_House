<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title></title>        
    </head>
    <body>
        <br><br><br><br>
            <?php
        require_once '../dao/administradorDAO.php';

        $administradorDAO = new AdministradorDAO();
        $administradores = $administradorDAO->getAllAdministrador();

        echo "<table class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Cpf</th>";
        echo "  <th>Email</th>";
        echo "  <th>Telefone</th>";
         echo "  <th>Usuário</th>";
        echo "  <th>Senha</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";

        foreach ($administradores as $a) {
            echo "<tr>";
            echo "  <td>{$a["nomeAdmin"]}</td>";
            echo "  <td>{$a["cpfAdmin"]}</td>";
            echo "  <td>{$a["emailAdmin"]}</td>";
            echo "  <td>{$a["telefoneAdmin"]}</td>";
            echo "  <td>{$a["usuario"]}</td>";
            echo "  <td>{$a["senha"]}</td>";
            echo "  <td><a class='btn btn-danger' href='../controller/excluirAdministradorByIdController.php?idAdministrador={$a["idAdministrador"]}'>Excluir</a></td>";
            echo "  <td><a class='btn btn-warning' href='formAltAAdmin.php?idAdministrador={$a["idAdministrador"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
