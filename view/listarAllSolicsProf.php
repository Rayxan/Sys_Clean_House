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
        require_once '../dao/solicCasaDAO.php';

        $solicCasaDAO = new SolicCasaDAO();
        $solicsCasa = $solicCasaDAO->getAllSolicCasa();
        echo "<h3 align='center'> LISTA DE SOLICITAÇÕES RESIDENCIAIS</h3>";
        echo "<br><br>";
        echo "<table class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th><center>Tipo de serviço</center></th>";
        echo "  <th><center>Tipo de residência</center></th>";
        echo "  <th><center>Quantidade de banheiros</center></th>";
        echo "  <th><center>Quantidade de quartos</center></th>";
        echo "  <th colspan='6'><center>Opcionais</center></th>";
        
        echo "  <th><center>Período</center></th>";
        echo "  <th><center>Data de solicitação</center></th>";
        
        echo "  <th><center>Preço</center></th>";
        echo "  <th><center>Cliente</center></th>";
        echo "  <th><center>Excluir</center></th>";
        echo "  <th><center>Alterar</center></th>";
        echo "</tr>";

        foreach ($solicsCasa as $sc) {
            echo "<tr>";
            $DataSolicitada = $sc["diaServ"] . "/" . $sc["mesServ"] . "/" . $sc["anoServ"] . " às " . $sc["horaServ"];

            echo "<tr>";
            echo "  <td align='center'>{$sc["tipoServico"]}</td>";
            echo "  <td align='center'>{$sc["tipoResidencia"]}</td>";
            echo "  <td align='center'>{$sc["quantBanheiros"]}</td>";
            echo "  <td align='center'>{$sc["quantQuartos"]}</td>";
            
            if ($sc["janelas"] != "") {
                echo " <td align='center'><img src = '../imagens/janela.gif' width = '55' height = '55' Title='Interior das janelas.'/></td>";
            }else{echo "  <td align='center'>{$sc["janelas"]}</td>";}
             if ($sc["geladeira"] != "") {
                echo " <td align='center'><img src = '../imagens/geladeira.gif' width = '55' height = '55' Title='Interior da geladeira.'/></td>";
            }else{echo "  <td align='center'>{$sc["geladeira"]}</td>";}
             if ($sc["armario"] != "") {
                echo " <td align='center'><img src = '../imagens/armario.gif' width = '50' height = '50' Title='Interior de armarios de cozinha.'/></td>";
            }else{ echo "  <td align='center'>{$sc["armario"]}</td>";}
             if ($sc["aspirar"] != "") {
                echo " <td align='center'><img src = '../imagens/aspirador.gif' width = '50' height = '50' Title='Aspirar tapetes e estofados.'/></td>";
            }else{ echo "  <td align='center'>{$sc["aspirar"]}</td>";}
             if ($sc["garagem"] != "") {
                echo " <td align='center'><img src = '../imagens/garagem.gif' width = '55' height = '55' Title='Limpeza da garagem.' /></td>";
            } else {echo "  <td align='center'>{$sc["garagem"]}</td>";}
            
            if ($sc["churrasqueira"] != "") {
                echo " <td align='center'><img src = '../imagens/churrasqueira.gif' width = '55' height = '55'  Title='Limpeza da churrasqueira.' /></td>";
            }else{ echo "  <td align='center'>{$sc["churrasqueira"]}</td>";}

            
            
            echo "  <td align='center'>{$sc["periodoServ"]}</td>";
            echo "  <td align='center'>{$DataSolicitada}</td>";
            echo "  <td align='center'>{$sc["precoCasa"]},00</td>";
            echo "  <td align='center'>{$sc["nomeCliente"]}</td>";
            echo "  <td align='center'><a class='btn btn-danger' href='../controller/excluirSolicCasaByIdController.php?codSolicitacao={$sc["codSolicitacao"]}'>Excluir</a></td>";
            echo "  <td align='center'><a class='btn btn-warning' href='formAltSolicCasaAdmin.php?codSolicitacao={$sc["codSolicitacao"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
        <br>
        <?php
        require_once '../dao/solicEmpresaDAO.php';
       
        $solicEmpresaDAO = new SolicEmpresaDAO();
        $solicsEmpresa = $solicEmpresaDAO->getAllSolicEmpresa();
        echo "<h3 align='center'> LISTA DE SOLICITAÇÕES EMPRESARIAIS</h3>";
        echo "<br><br>";
        echo "<table  class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th><center>Local de serviço</center></th>";
        echo "  <th><center>Quantidade de banheiros</center></th>";
        echo "  <th><center>Área do local</center></th>";
        echo "  <th><center>Período</center></th>";
        echo "  <th><center>Data de solicitação</center></th>";
        
        echo "  <th><center>Valor a ser pago</center></th>";
        echo "  <th><center>Cliente</center></th>";
        echo "  <th colspan='2' align='right'><center>Deseja aceitar esta solicitação?</center></th>";
        echo "</tr>";

        foreach ($solicsEmpresa as $sce) {
            echo "<tr>";
             $DataSolicitada = $sce["diaServEmp"] . "/" . $sce["mesServEmp"] . "/" . $sce["anoServEmp"] . " às " . $sce["horaServEmp"];

            echo "  <td align='center'>{$sce["locServ"]}</td>";
            echo "  <td align='center'>{$sce["quantBanheirosEmp"]}</td>";
            echo "  <td align='center'>{$sce["areaServ"]}</td>";
            echo "  <td align='center'>{$sce["periodoServEmp"]}</td>";
            echo "  <td align='center'>{$DataSolicitada}</td>";
            
            echo "  <td align='center'>{$sce["precoEmp"]}</td>";
            echo "  <td align='center'>{$sce["Cliente_idCliente"]}</td>";
            echo "  <td align='center'><a class='btn btn-success' href='#'>Aceitar serviço</a></td>";
            echo "  <td align='center'><a class='btn btn-danger' href='#'>Recusar serviço</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
