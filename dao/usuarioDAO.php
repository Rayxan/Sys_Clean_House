<?php

require_once 'conexao/conexao.php';

class UsuarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllUsuario() {
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarUsuario(usuarioDTO $usuarioDTO) {
        try {
            $sql = "INSERT INTO usuario (usuario,senha,perfil_idperfil) 
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getPerfil_idperfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirUsuario($idusuario) {
        try {
            $sql = "DELETE FROM usuario 
                   WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getUsuarioById($idusuario) {
        try {
            $sql = "SELECT * FROM usuario WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateUsuarioById(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET usuario=?,
                                       senha=?,
                                       perfil_idperfil=?
                    WHERE idusuario= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getPerfil_idperfil());
            $stmt->bindValue(4, $usuarioDTO->getIdusuario());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
