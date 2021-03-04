<?php

class AdministradorDTO {
    
    private $idAdministrador;
    private $nomeAdmin;
    private $cpfAdmin;
    private $emailAdmin;
    private $telefoneAdmin;
    private $usuario;
    private $senha;
    private $Perfil_idPerfil;
    
    function getIdAdministrador() {
        return $this->idAdministrador;
    }

    function getNomeAdmin() {
        return $this->nomeAdmin;
    }

    function getCpfAdmin() {
        return $this->cpfAdmin;
    }

    function getEmailAdmin() {
        return $this->emailAdmin;
    }

    function getTelefoneAdmin() {
        return $this->telefoneAdmin;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPerfil_idPerfil() {
        return $this->Perfil_idPerfil;
    }

    function setIdAdministrador($idAdministrador) {
        $this->idAdministrador = $idAdministrador;
    }

    function setNomeAdmin($nomeAdmin) {
        $this->nomeAdmin = $nomeAdmin;
    }

    function setCpfAdmin($cpfAdmin) {
        $this->cpfAdmin = $cpfAdmin;
    }

    function setEmailAdmin($emailAdmin) {
        $this->emailAdmin = $emailAdmin;
    }

    function setTelefoneAdmin($telefoneAdmin) {
        $this->telefoneAdmin = $telefoneAdmin;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil_idPerfil($Perfil_idPerfil) {
        $this->Perfil_idPerfil = $Perfil_idPerfil;
    }


}
