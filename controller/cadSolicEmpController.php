<?php
require_once '../dto/solicEmpresaDTO.php';
require_once '../dao/solicEmpresaDAO.php';

// recuperei os dados do formulario
$locServ = $_POST["locserv"];
$quantBanheirosEmp = $_POST["banheiros"];
$areaServ = $_POST["areatotal"];
$periodoServEmp = $_POST["agendamento"];
$diaServEmp = $_POST["diaEmp"];
$mesServEmp = $_POST["mesEmp"];
$anoServEmp = $_POST["anoEmp"];
$horaServEmp = $_POST["horaEmp"];
$precoEmp = $_POST["campo4"];
$Cliente_idCliente = $_POST["idCliente"];

$solicEmpresaDTO = new SolicEmpresaDTO();
$solicEmpresaDTO->setLocServ($locServ);
$solicEmpresaDTO->setQuantBanheirosEmp($quantBanheirosEmp);
$solicEmpresaDTO->setAreaServ($areaServ);
$solicEmpresaDTO->setPeriodoServEmp($periodoServEmp);
$solicEmpresaDTO->setDiaServEmp($diaServEmp);
$solicEmpresaDTO->setMesServEmp($mesServEmp);
$solicEmpresaDTO->setAnoServEmp($anoServEmp);
$solicEmpresaDTO->setHoraServEmp($horaServEmp);
$solicEmpresaDTO->setPrecoEmp($precoEmp);
$solicEmpresaDTO->setCliente_idCliente($Cliente_idCliente);
/*echo "<pre>";
var_dump($solicEmpresaDTO);
echo "</pre>";*/
$solicEmpresaDAO = new SolicEmpresaDAO();
$sucesso = $solicEmpresaDAO->salvarSolicEmpresa($solicEmpresaDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formSolicServClienteEmp.php?msg={$msg}';";
   echo "</script> ";
}
?>

