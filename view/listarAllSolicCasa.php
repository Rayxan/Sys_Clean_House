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
        require_once '../dao/solicCasaDAO.php';

        $solicCasaDAO = new SolicCasaDAO();
        $solicsCasa = $solicCasaDAO->getAllSolicCasa();
        
        echo "<table class='table table-striped;' align='center'>";
        echo "<tr>";
        echo "  <th>Tipo de serviço</th>";
        echo "  <th>Tipo de residência</th>";
        echo "  <th>Quantidade de banheiros</th>";
        echo "  <th>Quantidade de quartos</th>";
        echo "  <th colspan='6' >Opcionais</th>";
       
        echo "  <th>Período</th>";
        echo "  <th>Data solicitada</th>";

        echo "  <th>Preço</th>";
        echo "  <th>Cliente</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
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
         
            echo "  <td>{$sc["precoCasa"]},00</td>";
            echo "  <td>{$sc["nomeCliente"]}</td>";
            echo "  <td><a class='btn btn-danger' href='../controller/excluirSolicCasaByIdController.php?codSolicitacao={$sc["codSolicitacao"]}'>Excluir</a></td>";
            echo "  <td><a class='btn btn-warning' href='formAltSolicCasaAdmin.php?codSolicitacao={$sc["codSolicitacao"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
