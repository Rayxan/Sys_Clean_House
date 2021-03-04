<?php
require_once '../dao/administradorDAO.php';
session_start();
$idadministrador = $_SESSION["idAdministrador"];
//echo $idcliente;

$administradorDAO = new AdministradorDAO();
$administradorDAO->excluirAdministrador($idadministrador);

echo "<script>";
echo "window.location.href = '../view/PaginaLogin.php';";
echo "</script> ";
?>
