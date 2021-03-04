<?php
require_once '../dto/solicEmpresaDTO.php';
require_once '../dao/solicEmpresaDAO.php';

// recuperei os dados do formulario
$periodoServEmp = $_POST["agendamento"];
$diaServEmp = $_POST["diaEmp"];
$mesServEmp = $_POST["mesEmp"];
$anoServEmp = $_POST["anoEmp"];
$horaServEmp = $_POST["horaEmp"];
$codSolicitacaoEmp = $_POST["codSolicitacaoEmp"];

$solicEmpresaDTO = new SolicEmpresaDTO();
$solicEmpresaDTO->setPeriodoServEmp($periodoServEmp);
$solicEmpresaDTO->setDiaServEmp($diaServEmp);
$solicEmpresaDTO->setMesServEmp($mesServEmp);
$solicEmpresaDTO->setAnoServEmp($anoServEmp);
$solicEmpresaDTO->setHoraServEmp($horaServEmp);
$solicEmpresaDTO->setCodSolicitacaoEmp($codSolicitacaoEmp);
/*echo "<pre>";
var_dump($solicCasaDTO);
echo "</pre>";*/
$solicEmpresaDAO = new SolicEmpresaDAO();
$solicEmpresaDAO->updateSolicEmpresaById($solicEmpresaDTO);

echo "<script>";
echo "window.location.href = '../view/listarSolicEmpresaCliente.php';";
echo "</script> ";
?>

