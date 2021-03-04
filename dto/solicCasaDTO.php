<?php

class SolicCasaDTO {
    
    private $codSolicitacao;
    private $tipoServico;
    private $tipoResidencia;
    private $quantBanheiros;
    private $quantQuartos;
    private $janelas;
    private $geladeira;
    private $armario;
    private $aspirar;
    private $garagem;
    private $churrasqueira;
    private $periodoServ;
    private $diaServ;
    private $mesServ;
    private $anoServ;
    private $horaServ;
    private $precoCasa;
    private $Cliente_idCliente;
    
    function getCodSolicitacao() {
        return $this->codSolicitacao;
    }

    function getTipoServico() {
        return $this->tipoServico;
    }

    function getTipoResidencia() {
        return $this->tipoResidencia;
    }

    function getQuantBanheiros() {
        return $this->quantBanheiros;
    }

    function getQuantQuartos() {
        return $this->quantQuartos;
    }

    function getJanelas() {
        return $this->janelas;
    }

    function getGeladeira() {
        return $this->geladeira;
    }

    function getArmario() {
        return $this->armario;
    }

    function getAspirar() {
        return $this->aspirar;
    }

    function getGaragem() {
        return $this->garagem;
    }

    function getChurrasqueira() {
        return $this->churrasqueira;
    }

    function getPeriodoServ() {
        return $this->periodoServ;
    }

    function getDiaServ() {
        return $this->diaServ;
    }

    function getMesServ() {
        return $this->mesServ;
    }

    function getAnoServ() {
        return $this->anoServ;
    }

    function getHoraServ() {
        return $this->horaServ;
    }

    function getPrecoCasa() {
        return $this->precoCasa;
    }

    function getCliente_idCliente() {
        return $this->Cliente_idCliente;
    }

    function setCodSolicitacao($codSolicitacao) {
        $this->codSolicitacao = $codSolicitacao;
    }

    function setTipoServico($tipoServico) {
        $this->tipoServico = $tipoServico;
    }

    function setTipoResidencia($tipoResidencia) {
        $this->tipoResidencia = $tipoResidencia;
    }

    function setQuantBanheiros($quantBanheiros) {
        $this->quantBanheiros = $quantBanheiros;
    }

    function setQuantQuartos($quantQuartos) {
        $this->quantQuartos = $quantQuartos;
    }

    function setJanelas($janelas) {
        $this->janelas = $janelas;
    }

    function setGeladeira($geladeira) {
        $this->geladeira = $geladeira;
    }

    function setArmario($armario) {
        $this->armario = $armario;
    }

    function setAspirar($aspirar) {
        $this->aspirar = $aspirar;
    }

    function setGaragem($garagem) {
        $this->garagem = $garagem;
    }

    function setChurrasqueira($churrasqueira) {
        $this->churrasqueira = $churrasqueira;
    }

    function setPeriodoServ($periodoServ) {
        $this->periodoServ = $periodoServ;
    }

    function setDiaServ($diaServ) {
        $this->diaServ = $diaServ;
    }

    function setMesServ($mesServ) {
        $this->mesServ = $mesServ;
    }

    function setAnoServ($anoServ) {
        $this->anoServ = $anoServ;
    }

    function setHoraServ($horaServ) {
        $this->horaServ = $horaServ;
    }

    function setPrecoCasa($precoCasa) {
        $this->precoCasa = $precoCasa;
    }

    function setCliente_idCliente($Cliente_idCliente) {
        $this->Cliente_idCliente = $Cliente_idCliente;
    }


}