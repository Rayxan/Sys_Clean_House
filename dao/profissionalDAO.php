<?php

require_once '../dao/conexao/conexao.php';

class ProfissionalDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllProfissional() {
        try {
            $sql = "SELECT * FROM profissional";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $profissionais = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $profissionais;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarProfissional(ProfissionalDTO $profissionalDTO) {
        try {
            $sql = "INSERT INTO profissional (nomeProfissional,emailProfissional,celularProfissional,cpfProfissional,cepProfissional,enderecoProfissional,complementProfissional,numeroProfissional,bairroProfissional,cidadeProfissional,estadoProfissional,usuario,senha,Perfil_idPerfil) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $profissionalDTO->getNomeP());
            $stmt->bindValue(2, $profissionalDTO->getEmailP());
            $stmt->bindValue(3, $profissionalDTO->getCelularP());
            $stmt->bindValue(4, $profissionalDTO->getCpfP());
            $stmt->bindValue(5, $profissionalDTO->getCepP());
            $stmt->bindValue(6, $profissionalDTO->getEnderecoP());
            $stmt->bindValue(7, $profissionalDTO->getComplementoP());
            $stmt->bindValue(8, $profissionalDTO->getNumeroP());
            $stmt->bindValue(9, $profissionalDTO->getBairroP());
            $stmt->bindValue(10, $profissionalDTO->getCidadeP());
            $stmt->bindValue(11, $profissionalDTO->getEstadoP());
            $stmt->bindValue(12, $profissionalDTO->getUsuario());
            $stmt->bindValue(13, $profissionalDTO->getSenha());
            $stmt->bindValue(14, $profissionalDTO->getPerfil_idPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirProfissional($idProfissional) {
        try {
            $sql = "DELETE FROM profissional 
                   WHERE idProfissional = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idProfissional);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getProfissionalById($idProfissional) {
        try {
            $sql = "SELECT * FROM profissional WHERE idProfissional = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idProfissional);
            $stmt->execute();
            $profissional = $stmt->fetch(PDO::FETCH_ASSOC);
            return $profissional;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateProfissionalById(ProfissionalDTO $profissionalDTO) {
        try {
            $sql = "UPDATE Profissional SET nomeProfissional=?,
                                       emailProfissional=?,
                                       celularProfissional=?,
                                       cpfProfissional=?,
                                       cepProfissional=?,
                                       enderecoProfissional=?,
                                       complementProfissional=?,
                                       numeroProfissional=?,
                                       bairroProfissional=?,
                                       cidadeProfissional=?,
                                       estadoProfissional=?,
                                       usuario=?,
                                       senha=?
                    WHERE idProfissional= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $profissionalDTO->getNomeP());
            $stmt->bindValue(2, $profissionalDTO->getEmailP());
            $stmt->bindValue(3, $profissionalDTO->getCelularP());
            $stmt->bindValue(4, $profissionalDTO->getCpfP());
            $stmt->bindValue(5, $profissionalDTO->getCepP());
            $stmt->bindValue(6, $profissionalDTO->getEnderecoP());
            $stmt->bindValue(7, $profissionalDTO->getComplementoP());
            $stmt->bindValue(8, $profissionalDTO->getNumeroP());
            $stmt->bindValue(9, $profissionalDTO->getBairroP());
            $stmt->bindValue(10, $profissionalDTO->getCidadeP());
            $stmt->bindValue(11, $profissionalDTO->getEstadoP());
            $stmt->bindValue(12, $profissionalDTO->getUsuario());
            $stmt->bindValue(13, $profissionalDTO->getSenha());
            $stmt->bindValue(14, $profissionalDTO->getIdProfissional())
            ;
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
