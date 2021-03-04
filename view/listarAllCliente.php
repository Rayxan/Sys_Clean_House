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
        require_once '../dao/clienteDAO.php';

        $clienteDAO = new ClienteDAO();
        $clientes = $clienteDAO->getAllCliente();

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

        foreach ($clientes as $c) {
            echo "<tr>";
            echo "  <td>{$c["nomeCliente"]}</td>";
            echo "  <td>{$c["emailCliente"]}</td>";
            echo "  <td>{$c["celularCliente"]}</td>";
            echo "  <td>{$c["cpfCliente"]}</td>";
            echo "  <td>{$c["cepCliente"]}</td>";
            echo "  <td>{$c["enderecoCliente"]}</td>";
            echo "  <td>{$c["complementCliente"]}</td>";
            echo "  <td>{$c["numeroCliente"]}</td>";
            echo "  <td>{$c["bairroCliente"]}</td>";
            echo "  <td>{$c["cidadeCliente"]}</td>";
            echo "  <td>{$c["estadoCliente"]}</td>";
            echo "  <td>{$c["usuario"]}</td>";
            echo "  <td>{$c["senha"]}</td>";
            echo "  <td><a class='btn btn-danger' href='../controller/excluirClienteByIdController.php?idCliente={$c["idCliente"]}'>Excluir</a></td>";
            echo "  <td><a class='btn btn-warning' href='formAltCAdmin.php?idCliente={$c["idCliente"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
