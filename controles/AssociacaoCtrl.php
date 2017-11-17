<?php
require_once '../dao/AssociacaoDao.php';
require_once '../entidades/Associacao.php';

class AssociacaoCtrl {

function cadastrArassociacao($ano, $portaria, $idPessoa, $idPefil, $idPapel, $dataInicio, $dataFim, $incluidoEm, $ultimaAlteracao, $status) {
      $aDao = new AssociacaoDao();
      $a = new Associacao();

      $a->setAno($ano);
      $a->setPortaria($portaria);
      $a->setIdPessoa($idPessoa);
      $a->setIdPerfil($idPefil);
      $a->setIdPapel($idPapel);
      $a->setDataInicio($dataInicio);
      $a->setDataFim($dataFim);
      $a->setIncluidoEm($incluidoEm);
      $a->setUltimaAlteracao($ultimaAlteracao);
      $a->setstatus($status);

      return $aDao->cadastrar($a);
   }

   function editarAssociacao($ano, $portaria, $idPessoa, $idPefil, $idPapel, $dataInicio, $dataFim, $incluidoEm, $ultimaAlteracao, $status) {
      $aDao = new AssociacaoDao();
      $a = new Associacao();

      $a->setAno($ano);
      $a->setPortaria($portaria);
      $a->setIdPessoa($idPessoa);
      $a->setIdPerfil($idPefil);
      $a->setIdPapel($idPapel);
      $a->setDataInicio($dataInicio);
      $a->setDataFim($dataFim);
      $a->setIncluidoEm($incluidoEm);
      $a->setUltimaAlteracao($ultimaAlteracao);
      $a->setstatus($status);

      return $aDao->editar($a);
   }

   function listarAssociacao() {
      $listAssociacao = func_get_args();

      $aDao = new AssociacaoDao();
      return $aDao->listar($listAssociacao);
   }

   function buscarAssociacao($id) {
      $aDao = new AssociacaoDao();
      return $aDao->buscar($id);
   }
}
