<?php
require_once '../dao/solicEmpresaDAO.php';

$codSolicitacaoEmp = $_GET["codSolicitacaoEmp"];
//echo $idcliente;

$solicEmpresaDAO = new SolicEmpresaDAO();
$solicEmpresaDAO->excluirSolicEmpresa($codSolicitacaoEmp);

echo "<script>";
echo "window.location.href = '../view/listarAllSolicEmpresa.php';";
echo "</script> ";
?>
