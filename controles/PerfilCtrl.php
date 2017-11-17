<?php
require_once '../dao/PerfilDao.php';
require_once '../entidades/Perfil.php';

class PerfilCtrl {
    function cadastrarPerfil($perfil) {
        $pDao = new PerfilDao();
        $p = new Perfil();
        $ativo = 0;
        
        $p->setPerfil($perfil);
        $p->setStatus($ativo);

        return $pDao->cadastrar($p);
    }
    
    function editarPerfil($perfil, $status, $idPerfil) {
        $pDao = new PerfilDao();
        $p = new Perfil();
        
        $p->setPerfil($perfil);
        $p->setStatus($status);
        $p->setIdPerfil($idPerfil);

        return $pDao->editar($p);
    }
    
    function listarPerfil() {
      $pDao = new PerfilDao();
      return $pDao->listar();
   }
   
   function buscarPerfil($idPerfil) {
      $pDao = new PerfilDao();
      return $pDao->buscar($idPerfil);
   }
   
   function perfilAtivo() {
      $pDao = new PerfilDao();
      return $pDao->ativos();
   }
}