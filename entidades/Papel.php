<?php

class Papel {
    private $idPapel;
    private $papel;
    private $status;
    
    function getIdPapel() {
        return $this->idPapel;
    }

    function getPapel() {
        return $this->papel;
    }

    function getStatus() {
        return $this->status;
    }

    function setIdPapel($idPapel) {
        $this->idPapel = $idPapel;
    }

    function setPapel($papel) {
        $this->papel = $papel;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}