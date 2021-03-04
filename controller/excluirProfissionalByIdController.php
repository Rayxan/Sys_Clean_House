<?php
require_once '../dao/profissionalDAO.php';

$idProfissional = $_GET["idProfissional"];
//echo $idcliente;

$profissionalDAO = new ProfissionalDAO();
$profissionalDAO->excluirProfissional($idProfissional);

echo "<script>";
echo "window.location.href = '../view/listarAllProfissional.php';";
echo "</script> ";
?>
