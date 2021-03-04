<?php
require_once '../dao/solicCasaDAO.php';

$codSolicitacao = $_GET["codSolicitacao"];
//echo $idcliente;

$solicCasaDAO = new SolicCasaDAO();
$solicCasaDAO->excluirSolicCasa($codSolicitacao);

echo "<script>";
echo "window.location.href = '../view/listarAllSolicCasa.php';";
echo "</script> ";
?>
