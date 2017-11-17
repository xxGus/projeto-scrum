<?php

require_once '../dao/PessoaDao.php';
require_once '../entidades/Pessoa.php';
require_once '../controles/PessoaPerfilCtrl.php';

class PessoaCtrl {

    function cadastrarPessoa($nome, $cpf, $siape, $email, $telefone, $celular, $perfil) {
        try{
            $pDao = new PessoaDao();
            $p = new Pessoa();
            $ativo = 0;

            $p->setNome($nome);
            $p->setCpf($cpf);
            $p->setSiape($siape);
            $p->setEmail($email);
            $p->setTelefone($telefone);
            $p->setCelular($celular);
            $p->setStatus($ativo);

        $id = $pDao->cadastrar($p); // tem que retornar o id inserido
        $ctrl = new PessoaPerfilCtrl(); 
        $ctrl->cadastrarPerfilDaPessoa($perfil, $id); // cadastrar o perfil da pessoa que foi cadastrado com base no id retornado
        return $id;
    }catch(Exception $e){
        return 0;
    }
}

function editarPessoa($nome, $cpf, $siape, $email, $telefone, $celular, $status, $idPessoa, $perfil) {
    $pDao = new PessoaDao();
    $p = new Pessoa();

    $p->setNome($nome);
    $p->setCpf($cpf);
    $p->setSiape($siape);
    $p->setEmail($email);
    $p->setTelefone($telefone);
    $p->setCelular($celular);
    $p->setStatus($status);
    $p->setIdPessoa($idPessoa);

    $ret = $pDao->editar($p);

    $ctrl = new PessoaPerfilCtrl();
    $ctrl->cadastrarPerfilDaPessoa($perfil, $idPessoa); 
    return $ret;
}

function listarPessoa() {
  $pDao = new PessoaDao();
  return $pDao->listar();
}

function buscarPessoa($idPessoa) {
  $pDao = new PessoaDao();
  return $pDao->buscar($idPessoa);
}
}