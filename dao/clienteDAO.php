<?php

require_once '../dao/conexao/conexao.php';

class ClienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllCliente() {
        try {
            $sql = "SELECT * FROM cliente";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarCliente(ClienteDTO $clienteDTO) {
        try {
            $sql = "INSERT INTO cliente (nomeCliente,emailCliente,celularCliente,cpfCliente,cepCliente,enderecoCliente,complementCliente,numeroCliente,bairroCliente,cidadeCliente,estadoCliente,usuario,senha,Perfil_idPerfil) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNomeC());
            $stmt->bindValue(2, $clienteDTO->getEmailC());
            $stmt->bindValue(3, $clienteDTO->getCelularC());
            $stmt->bindValue(4, $clienteDTO->getCpfC());
            $stmt->bindValue(5, $clienteDTO->getCepC());
            $stmt->bindValue(6, $clienteDTO->getEnderecoC());
            $stmt->bindValue(7, $clienteDTO->getComplementoC());
            $stmt->bindValue(8, $clienteDTO->getNumeroC());
            $stmt->bindValue(9, $clienteDTO->getBairroC());
            $stmt->bindValue(10, $clienteDTO->getCidadeC());
            $stmt->bindValue(11, $clienteDTO->getEstadoC());
            $stmt->bindValue(12, $clienteDTO->getUsuario());
            $stmt->bindValue(13, $clienteDTO->getSenha());
            $stmt->bindValue(14, $clienteDTO->getPerfil_idPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirCliente($idcliente) {
        try {
            $sql = "DELETE FROM cliente 
                   WHERE idCliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getClienteById($idcliente) {
        try {
            $sql = "SELECT * FROM cliente WHERE idCliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateClienteById(ClienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE cliente SET nomeCliente=?,
                                       emailCliente=?,
                                       celularCliente=?,
                                       cpfCliente=?,
                                       cepCliente=?,
                                       enderecoCliente=?,
                                       complementCliente=?,
                                       numeroCliente=?,
                                       bairroCliente=?,
                                       cidadeCliente=?,
                                       estadoCliente=?,
                                       usuario=?,
                                       senha=?
                    WHERE idCliente= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNomeC());
            $stmt->bindValue(2, $clienteDTO->getEmailC());
            $stmt->bindValue(3, $clienteDTO->getCelularC());
            $stmt->bindValue(4, $clienteDTO->getCpfC());
            $stmt->bindValue(5, $clienteDTO->getCepC());
            $stmt->bindValue(6, $clienteDTO->getEnderecoC());
            $stmt->bindValue(7, $clienteDTO->getComplementoC());
            $stmt->bindValue(8, $clienteDTO->getNumeroC());
            $stmt->bindValue(9, $clienteDTO->getBairroC());
            $stmt->bindValue(10, $clienteDTO->getCidadeC());
            $stmt->bindValue(11, $clienteDTO->getEstadoC());
            $stmt->bindValue(12, $clienteDTO->getUsuario());
            $stmt->bindValue(13, $clienteDTO->getSenha());
            $stmt->bindValue(14, $clienteDTO->getIdCliente())
            ;
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
