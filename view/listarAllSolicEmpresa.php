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
        require_once '../dao/solicEmpresaDAO.php';

        $solicEmpresaDAO = new SolicEmpresaDAO();
        $solicsEmpresa = $solicEmpresaDAO->getAllSolicEmpresa();
        
        echo "<table class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th>Local de serviço</th>";
        echo "  <th>Quantidade de banheiros</th>";
        echo "  <th>Área do local</th>";
        echo "  <th>Período</th>";
        echo "  <th>Data de solicitação</th>";
        
        echo "  <th>Preço</th>";
        echo "  <th>Cliente</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";

        foreach ($solicsEmpresa as $sce) {
            echo "<tr>";
            $DataSolicitada = $sce["diaServEmp"] . "/" . $sce["mesServEmp"] . "/" . $sce["anoServEmp"] . " às " . $sce["horaServEmp"];
          
            echo "  <td>{$sce["locServ"]}</td>";
            echo "  <td>{$sce["quantBanheirosEmp"]}</td>";
            echo "  <td>{$sce["areaServ"]}</td>";
            echo "  <td>{$sce["periodoServEmp"]}</td>";
            echo "  <td>{$DataSolicitada}</td>";
            
            echo "  <td>{$sce["precoEmp"]}</td>";
            echo "  <td>{$sce["nomeCliente"]}</td>";
            echo "  <td><a class='btn btn-danger' href='../controller/excluirSolicEmpresaByIdController.php?codSolicitacaoEmp={$sce["codSolicitacaoEmp"]}'>Excluir</a></td>";
            echo "  <td><a class='btn btn-warning' href='formAltSolicEmpresaAdmin.php?codSolicitacaoEmp={$sce["codSolicitacaoEmp"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
