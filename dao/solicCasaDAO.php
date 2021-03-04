<?php

require_once '../dao/conexao/conexao.php';

class SolicCasaDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllSolicCasa() {
        try {
            $sql = "SELECT s.codSolicitacao, s.tipoServico, s.tipoResidencia, s.quantBanheiros, s.quantQuartos, s.janelas, s.geladeira, s.armario, s.aspirar, s.garagem, s.churrasqueira, s.periodoServ, s.diaServ, s.mesServ, s.anoServ, s.horaServ, s.precoCasa, s.Cliente_idCliente, c.nomeCliente FROM solicitacaocasa as s INNER
                    JOIN cliente as c ON (s.Cliente_idCliente = c.idCliente)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $solicsCasa = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $solicsCasa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllSolicCasaCliente($id) {
        try {
            $sql = "SELECT * FROM solicitacaocasa where Cliente_idCliente = " . $id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $solicsCasa = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $solicsCasa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function salvarSolicCasa(SolicCasaDTO $solicCasaDTO) {
        try {
            $sql = "INSERT INTO solicitacaocasa (tipoServico,tipoResidencia,quantBanheiros,quantQuartos,janelas,geladeira,armario,aspirar,garagem,churrasqueira,periodoServ,diaServ,mesServ,anoServ,horaServ,precoCasa,Cliente_idCliente) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            //echo $sql;
            //exit();
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $solicCasaDTO->getTipoServico());
            $stmt->bindValue(2, $solicCasaDTO->getTipoResidencia());
            $stmt->bindValue(3, $solicCasaDTO->getQuantBanheiros());
            $stmt->bindValue(4, $solicCasaDTO->getQuantQuartos());
            $stmt->bindValue(5, $solicCasaDTO->getJanelas());
            $stmt->bindValue(6, $solicCasaDTO->getGeladeira());
            $stmt->bindValue(7, $solicCasaDTO->getArmario());
            $stmt->bindValue(8, $solicCasaDTO->getAspirar());
            $stmt->bindValue(9, $solicCasaDTO->getGaragem());
            $stmt->bindValue(10, $solicCasaDTO->getChurrasqueira());
            $stmt->bindValue(11, $solicCasaDTO->getPeriodoServ());
            $stmt->bindValue(12, $solicCasaDTO->getDiaServ());
            $stmt->bindValue(13, $solicCasaDTO->getMesServ());
            $stmt->bindValue(14, $solicCasaDTO->getAnoServ());
            $stmt->bindValue(15, $solicCasaDTO->getHoraServ());
            $stmt->bindValue(16, $solicCasaDTO->getPrecoCasa());
            $stmt->bindValue(17, $solicCasaDTO->getCliente_idCliente());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirSolicCasa($codSolicitacao) {
        try {
            $sql = "DELETE FROM solicitacaocasa 
                   WHERE codSolicitacao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codSolicitacao);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getSolicCasaById($codSolicitacao) {
        try {
            $sql = "SELECT * FROM solicitacaocasa WHERE codSolicitacao = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codSolicitacao);
            $stmt->execute();
            $solicCasa = $stmt->fetch(PDO::FETCH_ASSOC);
            return $solicCasa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateSolicCasaById(SolicCasaDTO $solicCasaDTO) {
        try {
            $sql = "UPDATE solicitacaocasa SET periodoServ=?,
                                       diaServ=?,
                                       mesServ=?,
                                       anoServ=?,
                                       horaServ=? 
                    WHERE codSolicitacao= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $solicCasaDTO->getPeriodoServ());
            $stmt->bindValue(2, $solicCasaDTO->getDiaServ());
            $stmt->bindValue(3, $solicCasaDTO->getMesServ());
            $stmt->bindValue(4, $solicCasaDTO->getAnoServ());
            $stmt->bindValue(5, $solicCasaDTO->getHoraServ());
            $stmt->bindValue(6, $solicCasaDTO->getCodSolicitacao());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
