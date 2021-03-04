<?php
require_once '../dao/profissionalDAO.php';
session_start();
$idProfissional = $_SESSION["idProfissional"];
//echo $idcliente;

$profissionalDAO = new ProfissionalDAO();
$profissionalDAO->excluirProfissional($idProfissional);

echo "<script>";
echo "window.location.href = '../view/PaginaLogin.php';";
echo "</script> ";
?>
