<?php

require_once '../dao/conexao/conexao.php';

class SolicEmpresaDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllSolicEmpresa() {
        try {
            $sql = "SELECT s.codSolicitacaoEmp, s.locServ, s.quantBanheirosEmp, 
                s.areaServ, s.periodoServEmp, s.diaServEmp, s.mesServEmp, s.anoServEmp, s.horaServEmp,
                s.precoEmp, s.Cliente_idCliente, c.nomeCliente FROM solicitacaoemp as s INNER JOIN cliente as c ON (s.Cliente_idCliente = c.idCliente)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $solicsEmpresa = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $solicsEmpresa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllSolicEmpresaCliente($id) {
        try {
            $sql = "SELECT * FROM solicitacaoemp where Cliente_idCliente = " . $id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $solicsEmpresa = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $solicsEmpresa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function salvarSolicEmpresa(SolicEmpresaDTO $solicEmpresaDTO) {
        try {
            $sql = "INSERT INTO solicitacaoemp (locServ,quantBanheirosEmp,areaServ,periodoServEmp,diaServEmp,mesServEmp,anoServEmp,horaServEmp,precoEmp,Cliente_idCliente) 
                    VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $solicEmpresaDTO->getLocServ());
            $stmt->bindValue(2, $solicEmpresaDTO->getQuantBanheirosEmp());
            $stmt->bindValue(3, $solicEmpresaDTO->getAreaServ());
            $stmt->bindValue(4, $solicEmpresaDTO->getPeriodoServEmp());
            $stmt->bindValue(5, $solicEmpresaDTO->getDiaServEmp());
            $stmt->bindValue(6, $solicEmpresaDTO->getMesServEmp());
            $stmt->bindValue(7, $solicEmpresaDTO->getAnoServEmp());
            $stmt->bindValue(8, $solicEmpresaDTO->getHoraServEmp());
            $stmt->bindValue(9, $solicEmpresaDTO->getPrecoEmp());
            $stmt->bindValue(10, $solicEmpresaDTO->getCliente_idCliente());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirSolicEmpresa($codSolicitacaoEmp) {
        try {
            $sql = "DELETE FROM solicitacaoemp
                   WHERE codSolicitacaoEmp = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codSolicitacaoEmp);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getSolicEmpresaById($codSolicitacaoEmp) {
        try {
            $sql = "SELECT * FROM solicitacaoemp WHERE codSolicitacaoEmp = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $codSolicitacaoEmp);
            $stmt->execute();
            $solicEmpresa = $stmt->fetch(PDO::FETCH_ASSOC);
            return $solicEmpresa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateSolicEmpresaById(SolicEmpresaDTO $solicEmpresaDTO) {
        try {
            $sql = "UPDATE solicitacaoemp SET periodoServEmp=?,
                                       diaServEmp=?,
                                       mesServEmp=?,
                                       anoServEmp=?,
                                       horaServEmp=? 
                    WHERE codSolicitacaoEmp= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $solicEmpresaDTO->getPeriodoServEmp());
            $stmt->bindValue(2, $solicEmpresaDTO->getDiaServEmp());
            $stmt->bindValue(3, $solicEmpresaDTO->getMesServEmp());
            $stmt->bindValue(4, $solicEmpresaDTO->getAnoServEmp());
            $stmt->bindValue(5, $solicEmpresaDTO->getHoraServEmp());
            $stmt->bindValue(6, $solicEmpresaDTO->getCodSolicitacaoEmp());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
