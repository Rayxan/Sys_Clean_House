<?php
require_once '../dao/administradorDAO.php';

$idadministrador = $_GET["idAdministrador"];
//echo $idcliente;

$administradorDAO = new AdministradorDAO();
$administradorDAO->excluirAdministrador($idadministrador);

echo "<script>";
echo "window.location.href = '../view/listarAllAdministrador.php';";
echo "</script> ";
?>
