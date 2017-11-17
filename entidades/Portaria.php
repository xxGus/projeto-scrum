<?php

class Portaria {
   private $ano;
   private $portaria;
   private $portariaData;
   private $idCampus;
   private $dispoe;
   private $texto1Cont;
   private $texto3;
   private $texto4;
   private $contrato;
   private $empresa;
   private $objeto;
   private $dataInicio;
   private $dataFim;
   private $objetivo;
   private $diretorGeral;
   private $incluidoEm;
   private $ultimaAlteracao;
   private $portariaPai;
   private $portariaPaiAno;
   private $revogaPai;
   private $status;


   function getAno() {
      return $this->ano;
   }
   function getPortaria() {
      return $this->portaria;
   }
   function getPortariaData() {
      return $this->portariaData;
   }
   function getIdCampus() {
      return $this->idCampus;
   }
   function getDispoe() {
      return $this->dispoe;
   }
   function getTexto1Cont() {
      return $this->texto1Cont;
   }
   function getTexto3() {
      return $this->texto3;
   }
   function getTexto4() {
      return $this->texto4;
   }
   function getContrato() {
      return $this->contrato;
   }
   function getEmpresa() {
      return $this->empresa;
   }
   function getObjeto() {
      return $this->objeto;
   }
   function getDataInicio() {
      return $this->dataInicio;
   }
   function getDataFim() {
      return $this->dataFim;
   }
   function getObjetivo() {
      return $this->objetivo;
   }
   function getDiretorGeral() {
      return $this->diretorGeral;
   }
   function getIncluidoEm() {
      return $this->incluidoEm;
   }
   function getUltimaAlteracao() {
      return $this->ultimaAlteracao;
   }
   function getPortariaPai() {
      return $this->portariaPai;
   }
   function getPortariaPaiAno() {
      return $this->portariaPaiAno;
   }
   function getRevogaPai() {
      return $this->revogaPai;
   }
   function getStatus() {
      return $this->status;
   }


   function setAno($ano) {
      $this->ano = $ano;
   }
   function setPortaria($portaria) {
      $this->portaria = $portaria;
   }
   function setPortariaData($portariaData) {
      $this->portariaData = $portariaData;
   }
   function setIdCampus($idCampus) {
      $this->idCampus = $idCampus;
   }
   function setDispoe($dispoe) {
      $this->dispoe = $dispoe;
   }
   function setTexto1Cont($texto1Cont) {
      $this->texto1Cont = $texto1Cont;
   }
   function setTexto3($texto3) {
      $this->texto3 = $texto3;
   }
   function setTexto4($texto4) {
      $this->texto4 = $texto4;
   }
   function setContrato($contrato) {
      $this->contrato = $contrato;
   }
   function setEmpresa($empresa) {
      $this->empresa = $empresa;
   }
   function setObjeto($objeto) {
      $this->objeto = $objeto;
   }
   function setDataInicio($dataInicio) {
      $this->dataInicio = $dataInicio;
   }
   function setDataFim($dataFim) {
      $this->dataFim = $dataFim;
   }
   function setObjetivo($objetivo) {
      $this->objetivo = $objetivo;
   }
   function setDiretorGeral($diretorGeral) {
      $this->diretorGeral = $diretorGeral;
   }
   function setIncluidoEm($incluidoEm) {
      $this->incluidoEm = $incluidoEm;
   }
   function setUltimaAlteracao($ultimaAlteracao) {
      $this->ultimaAlteracao = $ultimaAlteracao;
   }
   function setPortariaPai($portariaPai) {
      $this->portariaPai = $portariaPai;
   }
   function setPortariaPaiAno($portariaPaiAno) {
      $this->portariaPaiAno = $portariaPaiAno;
   }
   function setRevogaPai($revogaPai) {
      $this->revogaPai = $revogaPai;
   }
   function setStatus($status) {
      $this->status = $status;
   }
}
