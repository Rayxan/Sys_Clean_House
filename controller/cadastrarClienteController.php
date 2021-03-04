<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

// recuperei os dados do formulario
$perfil=$_POST["perfil"];
$nomeC = $_POST["nomeC"];
$emailC = $_POST["emailC"];
$celularC = $_POST["celularC"];
$cpfC = $_POST["cpfC"];
$cepC = $_POST["cepC"];
$enderecoC = $_POST["enderecoC"];
$complementoC = $_POST["complementoC"];
$numeroC = $_POST["numeroC"];
$bairroC = $_POST["bairroC"];
$cidadeC = $_POST["cidadeC"];
$estadoC = $_POST["estadoC"];
$usuarioC = $_POST["usuarioC"];
$senhaC = md5($_POST["senhaC"]);


$clienteDTO = new ClienteDTO();
$clienteDTO->setPerfil_idPerfil($perfil);
$clienteDTO->setNomeC($nomeC);
$clienteDTO->setEmailC($emailC);
$clienteDTO->setCelularC($celularC);
$clienteDTO->setCpfC($cpfC);
$clienteDTO->setCepC($cepC);
$clienteDTO->setEnderecoC($enderecoC);
$clienteDTO->setComplementoC($complementoC);
$clienteDTO->setNumeroC($numeroC);
$clienteDTO->setBairroC($bairroC);
$clienteDTO->setCidadeC($cidadeC);
$clienteDTO->setEstadoC($estadoC);
$clienteDTO->setUsuario($usuarioC);
$clienteDTO->setSenha($senhaC);
/*echo "<pre>";
var_dump($clienteDTO);
echo '</pre>';*/
$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->salvarCliente($clienteDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
   echo "</script> ";
}
?>

