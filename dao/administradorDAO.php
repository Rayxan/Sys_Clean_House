<?php

require_once '../dao/conexao/conexao.php';

class AdministradorDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllAdministrador() {
        try {
            $sql = "SELECT * FROM administrador";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $administradores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $administradores;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarAdministrador(AdministradorDTO $administradorDTO) {
        try {
            $sql = "INSERT INTO administrador (nomeAdmin,cpfAdmin,emailAdmin,telefoneAdmin,usuario,senha,Perfil_idPerfil) 
                    VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $administradorDTO->getNomeAdmin());
            $stmt->bindValue(2, $administradorDTO->getCpfAdmin());
            $stmt->bindValue(3, $administradorDTO->getEmailAdmin());
            $stmt->bindValue(4, $administradorDTO->getTelefoneAdmin());
            $stmt->bindValue(5, $administradorDTO->getUsuario());
            $stmt->bindValue(6, $administradorDTO->getSenha());
            $stmt->bindValue(7, $administradorDTO->getPerfil_idPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirAdministrador($idadministrador) {
        try {
            $sql = "DELETE FROM administrador 
                   WHERE idAdministrador = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idadministrador);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAdministradorById($idadministrador) {
        try {
            $sql = "SELECT * FROM administrador WHERE idAdministrador = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idadministrador);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateAdministradorById(AdministradorDTO $administradorDTO) {
        try {
            $sql = "UPDATE administrador SET nomeAdmin=?,
                                       cpfAdmin=?,
                                       emailAdmin=?,
                                       telefoneAdmin=?,
                                       usuario=?,
                                       senha=?
                    WHERE idAdministrador= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $administradorDTO->getNomeAdmin());
            $stmt->bindValue(2, $administradorDTO->getCpfAdmin());
            $stmt->bindValue(3, $administradorDTO->getEmailAdmin());
            $stmt->bindValue(4, $administradorDTO->getTelefoneAdmin());
            $stmt->bindValue(5, $administradorDTO->getUsuario());
            $stmt->bindValue(6, $administradorDTO->getSenha());
            $stmt->bindValue(7, $administradorDTO->getIdAdministrador());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
