<?php

class SolicEmpresaDTO {
    
    private $codSolicitacaoEmp;
    private $locServ;
    private $quantBanheirosEmp;
    private $areaServ;
    private $periodoServEmp;
    private $diaServEmp;
    private $mesServEmp;
    private $anoServEmp;
    private $horaServEmp;
    private $precoEmp;
    private $Cliente_idCliente;
    
    function getCodSolicitacaoEmp() {
        return $this->codSolicitacaoEmp;
    }

    function getLocServ() {
        return $this->locServ;
    }

    function getQuantBanheirosEmp() {
        return $this->quantBanheirosEmp;
    }

    function getAreaServ() {
        return $this->areaServ;
    }

    function getPeriodoServEmp() {
        return $this->periodoServEmp;
    }

    function getDiaServEmp() {
        return $this->diaServEmp;
    }

    function getMesServEmp() {
        return $this->mesServEmp;
    }

    function getAnoServEmp() {
        return $this->anoServEmp;
    }

    function getHoraServEmp() {
        return $this->horaServEmp;
    }

    function getPrecoEmp() {
        return $this->precoEmp;
    }

    function getCliente_idCliente() {
        return $this->Cliente_idCliente;
    }

    function setCodSolicitacaoEmp($codSolicitacaoEmp) {
        $this->codSolicitacaoEmp = $codSolicitacaoEmp;
    }

    function setLocServ($locServ) {
        $this->locServ = $locServ;
    }

    function setQuantBanheirosEmp($quantBanheirosEmp) {
        $this->quantBanheirosEmp = $quantBanheirosEmp;
    }

    function setAreaServ($areaServ) {
        $this->areaServ = $areaServ;
    }

    function setPeriodoServEmp($periodoServEmp) {
        $this->periodoServEmp = $periodoServEmp;
    }

    function setDiaServEmp($diaServEmp) {
        $this->diaServEmp = $diaServEmp;
    }

    function setMesServEmp($mesServEmp) {
        $this->mesServEmp = $mesServEmp;
    }

    function setAnoServEmp($anoServEmp) {
        $this->anoServEmp = $anoServEmp;
    }

    function setHoraServEmp($horaServEmp) {
        $this->horaServEmp = $horaServEmp;
    }

    function setPrecoEmp($precoEmp) {
        $this->precoEmp = $precoEmp;
    }

    function setCliente_idCliente($Cliente_idCliente) {
        $this->Cliente_idCliente = $Cliente_idCliente;
    }

}
