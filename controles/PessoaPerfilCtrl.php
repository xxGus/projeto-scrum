<?php
require_once '../dao/PessoaPerfilDao.php';
require_once '../entidades/PessoaPerfil.php';
class PessoaPerfilCtrl {
    
    function buscarPerfilDaPessoa($idPessoa) {
      $pDao = new PessoaPerfilDao();
      $idPerfil = $pDao->buscar($idPessoa); // Busca o id do perfil por meio do codigo do cliente
      return $idPerfil;
    }
   
   function cadastrarPerfilDaPessoa($perfil,$pessoa) {
        $pDao = new PessoaPerfilDao();
        $p = new PessoaPerfil();
        $ativo = 0;
        
        $p->setPerfil($perfil);
        $p->setPessoa($pessoa);
        $p->setStatus($ativo);

        $pDao->cadastrar($p);
    }
    
    function alterarPerfilDaPessoa($perfil,$pessoa,$status) {
        $pDao = new PessoaPerfilDao();
        $p = new PessoaPerfil();
        
        $p->setPerfil($perfil);
        $p->setPessoa($pessoa);
        $p->setStatus($status);

        return $pDao->editar($p);
    }
}