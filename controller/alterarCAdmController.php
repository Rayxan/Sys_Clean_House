<?php

require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

// recuperei os dados do formulario
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
$idcliente = $_POST["idCliente"];
//echo $idcliente;

$clienteDTO = new ClienteDTO();
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
$clienteDTO->setIdCliente($idcliente);

$clienteDAO = new ClienteDAO();
$clienteDAO->updateClienteById($clienteDTO);
/*echo '<pre>';
var_dump($clienteDTO);
echo '</pre>';*/

echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
?>
