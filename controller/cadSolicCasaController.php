<?php
require_once '../dto/solicCasaDTO.php';
require_once '../dao/solicCasaDAO.php';

// recuperei os dados do formulario
$tipoServico = $_POST["tipoServicoSelecionado"];
$tipoResidencia = $_POST["seular"];
$quantBanheiros = $_POST["banheiros"];
$quantQuartos = $_POST["quartos"];
$janelas = $_POST["janelas"];
$geladeira = $_POST["geladeira"];
$armario = $_POST["armario"];
$aspirar = $_POST["aspirar"];
$garagem = $_POST["garagem"];
$churrasqueira = $_POST["churrasqueira"];
$periodoServ = $_POST["agendamento"];
$diaServ = $_POST["dia"];
$mesServ = $_POST["mes"];
$anoServ = $_POST["ano"];
$horaServ = $_POST["hora"];
$precoCasa = $_POST["campo4"];
$Cliente_idCliente = $_POST["idCliente"];


$solicCasaDTO = new SolicCasaDTO();
$solicCasaDTO->setTipoServico($tipoServico);
$solicCasaDTO->setTipoResidencia($tipoResidencia);
$solicCasaDTO->setQuantBanheiros($quantBanheiros);
$solicCasaDTO->setQuantQuartos($quantQuartos);
$solicCasaDTO->setJanelas($janelas);
$solicCasaDTO->setGeladeira($geladeira);
$solicCasaDTO->setArmario($armario);
$solicCasaDTO->setAspirar($aspirar);
$solicCasaDTO->setGaragem($garagem);
$solicCasaDTO->setChurrasqueira($churrasqueira);
$solicCasaDTO->setPeriodoServ($periodoServ);
$solicCasaDTO->setDiaServ($diaServ);
$solicCasaDTO->setMesServ($mesServ);
$solicCasaDTO->setAnoServ($anoServ);
$solicCasaDTO->setHoraServ($horaServ);
$solicCasaDTO->setPrecoCasa($precoCasa);
$solicCasaDTO->setCliente_idCliente($Cliente_idCliente);
/*echo "<pre>";
var_dump($solicCasaDTO);
echo "</pre>";*/
$solicCasaDAO = new SolicCasaDAO();
$sucesso = $solicCasaDAO->salvarSolicCasa($solicCasaDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formSolicServCliente.php?msg={$msg}';";
   echo "</script> ";
}
?>

