<?php
require_once '../dao/PapelDao.php';
require_once '../entidades/Papel.php';
class PapelCtrl {
    
    function cadastrarPapel($papel) {
        $pDao = new PapelDao();
        $p = new Papel();
        $ativo = 0;
        
        $p->setPapel($papel);
        $p->setStatus($ativo);

        return $pDao->cadastrar($p);
    }
    
    function editarPapel($papel, $status, $idPapel) {
        $pDao = new PapelDao();
        $p = new Papel();
        
        $p->setPapel($papel);
        $p->setStatus($status);
        $p->setIdPapel($idPapel);

        return $pDao->editar($p);
    }
    
    function listarPapel() {
      $pDao = new PapelDao();
      return $pDao->listar();
   }
   
   function buscarPapel($idPapel) {
      $pDao = new PapelDao();
      return $pDao->buscar($idPapel);
   }
   
   function papelAtivo() {
      $pDao = new PapelDao();
      return $pDao->ativos();
   }
}