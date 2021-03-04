<?php

require_once 'conexao/conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($usuario,$senha) {
        try {
            $sql = "SELECT u.usuario,p.perfil,u.idAdministrador,u.nomeAdmin,u.cpfAdmin,u.emailAdmin,u.telefoneAdmin FROM administrador u
                    INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil)
                    WHERE usuario=? AND senha=?";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function loginCliente($usuario,$senha) {
        try {
            $sql = "SELECT u.usuario,p.perfil,u.idCliente,u.nomeCliente,u.emailCliente,u.celularCliente,u.cpfCliente,u.cepCliente,u.enderecoCliente,u.complementCliente,u.numeroCliente,u.bairroCliente,u.cidadeCliente,u.estadoCliente FROM cliente u
                    INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil)
                    WHERE usuario=? AND senha=?";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function loginProfissional($usuario,$senha) {
        try {
            $sql = "SELECT u.usuario,p.perfil,u.idProfissional,u.nomeProfissional,u.emailProfissional,u.celularProfissional,u.cpfProfissional,u.cepProfissional,u.enderecoProfissional,u.complementProfissional,u.numeroProfissional,u.bairroProfissional,u.cidadeProfissional,u.estadoProfissional FROM profissional u
                    INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil)
                    WHERE usuario=? AND senha=?";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>