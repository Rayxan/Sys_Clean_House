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
        echo "<table  class='table table-striped' align='center'>";
        echo "<tr>";
        echo "  <th><center>Tipo de serviço</center></th>";
        echo "  <th><center>Tipo de residência</center></th>";
        echo "  <th><center>Nº de banheiros</center></th>";
        echo "  <th><center>Nº de quartos</center></th>";
        echo "  <th colspan='6'><center>Opcionais</center></th>";
        echo "  <th><center>Período</center></th>";
        echo "  <th><center>Data solicitada</center></th>";
        echo "  <th><center>Valor a ser pago</center></th>";
        echo "  <th><center>Cliente</center></th>";
        echo "  <th colspan='2'><center>Deseja aceitar esta solicitação?</center></th>";
        echo "</tr>";

        foreach ($solicsCasa as $sc) {
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
            echo "  <td align='center'><a class='btn btn-success' href='#'>Aceitar <br> serviço</a></td>";
            echo "  <td align='center'><a class='btn btn-danger' href='#'>Recusar <br> serviço</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
