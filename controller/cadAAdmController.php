<?php
require_once '../dto/administradorDTO.php';
require_once '../dao/administradorDAO.php';

// recuperei os dados do formulario
$perfil=$_POST["perfil"];
$nomeAdmin = $_POST["nomeAdmin"];
$cpfAdmin = $_POST["cpfAdmin"];
$emailAdmin = $_POST["emailAdmin"];
$telefoneAdmin = $_POST["telefoneAdmin"];
$usuarioA = $_POST["usuarioA"];
$senhaA = md5($_POST["senhaA"]);


$administradorDTO = new AdministradorDTO();
$administradorDTO->setPerfil_idPerfil($perfil);
$administradorDTO->setNomeAdmin($nomeAdmin);
$administradorDTO->setCpfAdmin($cpfAdmin);
$administradorDTO->setEmailAdmin($emailAdmin);
$administradorDTO->setTelefoneAdmin($telefoneAdmin);
$administradorDTO->setUsuario($usuarioA);
$administradorDTO->setSenha($senhaA);
/*echo "<pre>";
var_dump($administradorDTO);
echo '</pre>';*/

$administradorDAO = new AdministradorDAO();
$sucesso = $administradorDAO->salvarAdministrador($administradorDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/listarAllAdministrador.php?msg={$msg}';";
   echo "</script> ";
}
?>

