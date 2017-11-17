<?php
require_once 'Perfil.php';
require_once 'Pessoa.php';
class PessoaPerfil {
    private $pessoa;
    private $perfil;
    private $status;
    
    function getPessoa() {
        return $this->pessoa;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}