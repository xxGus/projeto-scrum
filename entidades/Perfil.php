<?php

class Perfil {
    private $idPerfil;
    private $perfil;
    private $status;
    
    function getIdPerfil() {
        return $this->idPerfil;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getStatus() {
        return $this->status;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}