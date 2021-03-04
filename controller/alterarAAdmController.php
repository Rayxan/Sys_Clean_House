<?php

require_once '../dto/administradorDTO.php';
require_once '../dao/administradorDAO.php';

// recuperei os dados do formulario
$nomeAdmin = $_POST["nomeAdmin"];
$cpfAdmin = $_POST["cpfAdmin"];
$emailAdmin = $_POST["emailAdmin"];
$telefoneAdmin = $_POST["telefoneAdmin"];
$usuarioA = $_POST["usuarioA"];
$senhaA = md5($_POST["senhaA"]);
$idadministrador = $_POST["idAdministrador"];

//echo $idcliente;

$administradorDTO = new AdministradorDTO();
$administradorDTO->setNomeAdmin($nomeAdmin);
$administradorDTO->setCpfAdmin($cpfAdmin);
$administradorDTO->setEmailAdmin($emailAdmin);
$administradorDTO->setTelefoneAdmin($telefoneAdmin);
$administradorDTO->setUsuario($usuarioA);
$administradorDTO->setSenha($senhaA);
$administradorDTO->setIdAdministrador($idadministrador);

$administradorDAO = new AdministradorDAO();
$administradorDAO->updateAdministradorById($administradorDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllAdministrador.php';";
echo "</script> ";
?>
