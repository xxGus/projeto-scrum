<?php

class Pessoa {

    private $idPessoa;
    private $nome;
    private $cpf;
    private $siape;
    private $email;
    private $telefone;
    private $celular;
    private $status;
    
    function getIdPessoa() {
        return $this->idPessoa;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSiape() {
        return $this->siape;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getStatus() {
        return $this->status;
    }

    function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setSiape($siape) {
        $this->siape = $siape;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}