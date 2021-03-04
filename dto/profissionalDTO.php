<?php

class ProfissionalDTO {

    private $idProfissional;
    private $nomeP;
    private $emailP;
    private $celularP;
    private $cpfP;
    private $cepP;
    private $enderecoP;
    private $complementoP;
    private $numeroP;
    private $bairroP;
    private $cidadeP;
    private $estadoP;
    private $usuario;
    private $senha;
    private $Perfil_idPerfil;
    
    function getIdProfissional() {
        return $this->idProfissional;
    }

    function getNomeP() {
        return $this->nomeP;
    }

    function getEmailP() {
        return $this->emailP;
    }

    function getCelularP() {
        return $this->celularP;
    }

    function getCpfP() {
        return $this->cpfP;
    }

    function getCepP() {
        return $this->cepP;
    }

    function getEnderecoP() {
        return $this->enderecoP;
    }

    function getComplementoP() {
        return $this->complementoP;
    }

    function getNumeroP() {
        return $this->numeroP;
    }

    function getBairroP() {
        return $this->bairroP;
    }

    function getCidadeP() {
        return $this->cidadeP;
    }

    function getEstadoP() {
        return $this->estadoP;
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

    function setIdProfissional($idProfissional) {
        $this->idProfissional = $idProfissional;
    }

    function setNomeP($nomeP) {
        $this->nomeP = $nomeP;
    }

    function setEmailP($emailP) {
        $this->emailP = $emailP;
    }

    function setCelularP($celularP) {
        $this->celularP = $celularP;
    }

    function setCpfP($cpfP) {
        $this->cpfP = $cpfP;
    }

    function setCepP($cepP) {
        $this->cepP = $cepP;
    }

    function setEnderecoP($enderecoP) {
        $this->enderecoP = $enderecoP;
    }

    function setComplementoP($complementoP) {
        $this->complementoP = $complementoP;
    }

    function setNumeroP($numeroP) {
        $this->numeroP = $numeroP;
    }

    function setBairroP($bairroP) {
        $this->bairroP = $bairroP;
    }

    function setCidadeP($cidadeP) {
        $this->cidadeP = $cidadeP;
    }

    function setEstadoP($estadoP) {
        $this->estadoP = $estadoP;
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

?>
