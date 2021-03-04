<?php

class ClienteDTO {

    private $idCliente;
    private $nomeC;
    private $emailC;
    private $celularC;
    private $cpfC;
    private $cepC;
    private $enderecoC;
    private $complementoC;
    private $numeroC;
    private $bairroC;
    private $cidadeC;
    private $estadoC;
    private $usuario;
    private $senha;
    private $Perfil_idPerfil;

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeC() {
        return $this->nomeC;
    }

    function getEmailC() {
        return $this->emailC;
    }

    function getCelularC() {
        return $this->celularC;
    }

    function getCpfC() {
        return $this->cpfC;
    }

    function getCepC() {
        return $this->cepC;
    }

    function getEnderecoC() {
        return $this->enderecoC;
    }

    function getComplementoC() {
        return $this->complementoC;
    }

    function getNumeroC() {
        return $this->numeroC;
    }

    function getBairroC() {
        return $this->bairroC;
    }

    function getCidadeC() {
        return $this->cidadeC;
    }

    function getEstadoC() {
        return $this->estadoC;
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

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNomeC($nomeC) {
        $this->nomeC = $nomeC;
    }

    function setEmailC($emailC) {
        $this->emailC = $emailC;
    }

    function setCelularC($celularC) {
        $this->celularC = $celularC;
    }

    function setCpfC($cpfC) {
        $this->cpfC = $cpfC;
    }

    function setCepC($cepC) {
        $this->cepC = $cepC;
    }

    function setEnderecoC($enderecoC) {
        $this->enderecoC = $enderecoC;
    }

    function setComplementoC($complementoC) {
        $this->complementoC = $complementoC;
    }

    function setNumeroC($numeroC) {
        $this->numeroC = $numeroC;
    }

    function setBairroC($bairroC) {
        $this->bairroC = $bairroC;
    }

    function setCidadeC($cidadeC) {
        $this->cidadeC = $cidadeC;
    }

    function setEstadoC($estadoC) {
        $this->estadoC = $estadoC;
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
