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
        <br><br>
                <?php
        session_start();
        $id = $_SESSION["idCliente"];
        require_once '../dao/solicEmpresaDAO.php';

        $solicEmpresaDAO = new SolicEmpresaDAO();
        $solicsEmpresa = $solicEmpresaDAO->getAllSolicEmpresaCliente($id);
        echo "<h3 align='center'> LISTA DE SOLICITAÇÕES EMPRESARIAIS</h3>";
        echo "<br><br>";
        echo "<table  class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th><center>Local de serviço</center></th>";
        echo "  <th><center>Quantidade de banheiros</center></th>";
        echo "  <th><center>Área do local</center></th>";
        echo "  <th><center>Período</center></th>";
        echo "  <th><center>Data solicitada</center></th>";

        echo "  <th><center>Valor a ser pago</center></th>";

        echo "  <th colspan='2'><center>Dados de solicitação</center></th>";
        echo "</tr>";

        foreach ($solicsEmpresa as $sce) {
            
            $DataSolicitada = $sce["diaServEmp"] . "/" . $sce["mesServEmp"] . "/" . $sce["anoServEmp"] . " às " . $sce["horaServEmp"];
            echo "<tr>";
            echo "  <td align='center'>{$sce["locServ"]}</td>";
            echo "  <td align='center'>{$sce["quantBanheirosEmp"]}</td>";
            echo "  <td align='center'>{$sce["areaServ"]}</td>";
            echo "  <td align='center'>{$sce["periodoServEmp"]}</td>";
            echo "  <td align='center'>{$DataSolicitada}</td>";
            echo "  <td align='center'>{$sce["precoEmp"]},00</td>";
            echo "  <td align='center'><a class='btn btn-danger' href='../controller/excluirSolicEmpresaClienteByIdController.php?codSolicitacaoEmp={$sce["codSolicitacaoEmp"]}'>Excluir</a></td>";
            echo "  <td align='center'><a class='btn btn-warning' href='formAltSolicEmpresaCliente.php?codSolicitacaoEmp={$sce["codSolicitacaoEmp"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
