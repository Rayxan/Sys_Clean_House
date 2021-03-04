<?php
require_once '../dto/solicCasaDTO.php';
require_once '../dao/solicCasaDAO.php';

// recuperei os dados do formulario
$periodoServ = $_POST["agendamento"];
$diaServ = $_POST["dia"];
$mesServ = $_POST["mes"];
$anoServ = $_POST["ano"];
$horaServ = $_POST["hora"];
$codSolicitacao = $_POST["codSolicitacao"];

$solicCasaDTO = new SolicCasaDTO();
$solicCasaDTO->setPeriodoServ($periodoServ);
$solicCasaDTO->setDiaServ($diaServ);
$solicCasaDTO->setMesServ($mesServ);
$solicCasaDTO->setAnoServ($anoServ);
$solicCasaDTO->setHoraServ($horaServ);
$solicCasaDTO->setCodSolicitacao($codSolicitacao);
/*echo "<pre>";
var_dump($solicCasaDTO);
echo "</pre>";*/
$solicCasaDAO = new SolicCasaDAO();
$solicCasaDAO->updateSolicCasaById($solicCasaDTO);

echo "<script>";
echo "window.location.href = '../view/listarSolicCasaCliente.php';";
echo "</script> ";
?>

