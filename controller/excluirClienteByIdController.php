<?php
require_once '../dao/clienteDAO.php';

$idCliente = $_GET["idCliente"];
//echo $idcliente;

$clienteDAO = new ClienteDAO();
$clienteDAO->excluirCliente($idCliente);

echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
?>
