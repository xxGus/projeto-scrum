<?php

class Associacao {
   private $ano;
   private $portaria;
   private $idPessoa;
   private $idPerfil;
   private $idPapel;
   private $dataInicio;
   private $dataFim;
   private $incluidoEm;
   private $ultimaAlteracao;
   private $status;


   function getano() {
      return $this->ano;
   }
   function getPortaria() {
      return $this->portaria;
   }
   function getIdPessoa() {
      return $this->idPessoa;
   }
   function getIdPerfil() {
      return $this->idPerfil;
   }
   function getIdPapel() {
      return $this->idPapel;
   }
   function getDataInicio() {
      return $this->dataInicio;
   }
   function getDataFim() {
      return $this->dataFim;
   }
   function getIncluidoEm() {
      return $this->incluidoEm;
   }
   function getUltimaAlteracao() {
      return $this->ultimaAlteracao;
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
   function setIdPessoa($idPessoa) {
      $this->idPessoa = $idPessoa;
   }
   function setIdPerfil($idPerfil) {
      $this->idPerfil = $idPerfil;
   }
   function setIdPapel($idPapel) {
      $this->idPapel = $idPapel;
   }
   function setDataInicio($dataInicio) {
      $this->dataInicio = $dataInicio;
   }
   function setDataFim($dataFim) {
      $this->dataFim = $dataFim;
   }
   function setIncluidoEm($incluidoEm) {
      $this->incluidoEm = $incluidoEm;
   }
   function setUltimaAlteracao($ultimaAlteracao) {
      $this->ultimaAlteracao = $ultimaAlteracao;
   }
   function setstatus($status) {
      $this->status = $status;
   }
}
