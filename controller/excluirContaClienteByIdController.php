<?php
require_once '../dao/clienteDAO.php';
session_start();
$idCliente = $_SESSION["idCliente"];
//echo $idcliente;

$clienteDAO = new ClienteDAO();
$clienteDAO->excluirCliente($idCliente);

echo "<script>";
echo "window.location.href = '../view/PaginaLogin.php';";
echo "</script> ";
?>
