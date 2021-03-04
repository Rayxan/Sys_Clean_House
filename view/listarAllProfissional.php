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
        require_once '../dao/profissionalDAO.php';

        $profissionalDAO = new ProfissionalDAO();
        $profissionais = $profissionalDAO->getAllProfissional();
        
        echo "<table class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Email</th>";
        echo "  <th>Celular</th>";
        echo "  <th>CPF</th>";
        echo "  <th>CEP</th>";
        echo "  <th>Endereço</th>";
        echo "  <th>Complemento</th>";
        echo "  <th>Número</th>";
        echo "  <th>Bairro</th>";
        echo "  <th>Cidade</th>";
        echo "  <th>Estado</th>";
        echo "  <th>Usuário</th>";
        echo "  <th>Senha</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";

        foreach ($profissionais as $p) {
            echo "<tr>";
            echo "  <td>{$p["nomeProfissional"]}</td>";
            echo "  <td>{$p["emailProfissional"]}</td>";
            echo "  <td>{$p["celularProfissional"]}</td>";
            echo "  <td>{$p["cpfProfissional"]}</td>";
            echo "  <td>{$p["cepProfissional"]}</td>";
            echo "  <td>{$p["enderecoProfissional"]}</td>";
            echo "  <td>{$p["complementProfissional"]}</td>";
            echo "  <td>{$p["numeroProfissional"]}</td>";
            echo "  <td>{$p["bairroProfissional"]}</td>";
            echo "  <td>{$p["cidadeProfissional"]}</td>";
            echo "  <td>{$p["estadoProfissional"]}</td>";
            echo "  <td>{$p["usuario"]}</td>";
            echo "  <td>{$p["senha"]}</td>";
            echo "  <td><a class='btn btn-danger' href='../controller/excluirProfissionalByIdController.php?idProfissional={$p["idProfissional"]}'>Excluir</a></td>";
            echo "  <td><a class='btn btn-warning' href='formAltPAdmin.php?idProfissional={$p["idProfissional"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
