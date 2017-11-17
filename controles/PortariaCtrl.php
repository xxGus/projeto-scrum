<?php
require_once '../dao/PortariaDao.php';
require_once '../entidades/Portaria.php';


class PortariaCtrl {

   function cadastrarPortaria($ano, $portaria, $portariaData, $idCampus, $dispoe, $texto1Cont, $texto3, $texto4, $contrato, $empresa, $objeto, $dataInicio, $dataFim, $objetivo, $diretorGeral, $incluidoEm, $ultimaAlteracao, $portariaPai, $portariaPaiAno, $revogaPai, $status) {
      $pDao = new PortariaDao();
      $p = new Portaria();

      $p->setAno($ano);
      $p->setPortaria($portaria);
      $p->setPortariaData($portariaData);
      $p->setIdCampus($idCampus);
      $p->setDispoe($dispoe);
      $p->setTexto1Cont($texto1Cont);
      $p->setTexto3($texto3);
      $p->setTexto4($texto4);
      $p->setContrato($contrato);
      $p->setEmpresa($empresa);
      $p->setObjeto($objeto);
      $p->setDataInicio($dataInicio);
      $p->setDataFim($dataFim);
      $p->setObjetivo($objetivo);
      $p->setDiretorGeral($diretorGeral);
      $p->setIncluidoEm($incluidoEm);
      $p->setUltimaAlteracao($ultimaAlteracao);
      $p->setPortariaPai($portariaPai);
      $p->setPortariaPaiAno($portariaPaiAno);
      $p->setRevogaPai($revogaPai);
      $p->setStatus($status);



      return $pDao->cadastrar($p);
   } 

   function editarPortaria($ano, $portaria, $portariaData, $idCampus, $dispoe, $testo1Cont, $testo3, $testo4, $contrato, $empresa, $objeto, $dataInicio, $dataFim, $objetivo, $diretorGeral, $incluidoEm, $ultimaAlteracao, $portariaPai, $portariaPaiAno, $revogaPai, $status) {
      $pDao = new PortariaDao();
      $p = new Portaria();

      $p->setAno($ano);
      $p->setPortaria($portaria);
      $p->setPortariaData($portariaData);
      $p->setIdCampus($idCampus);
      $p->setDispoe($dispoe);
      $p->setTesto1Cont($testo1Cont);
      $p->setTesto3($testo3);
      $p->setTesto4($testo4);
      $p->setContrato($contrato);
      $p->setEmpresa($empresa);
      $p->setObjeto($objeto);
      $p->setDataInicio($dataInicio);
      $p->setDataFim($dataFim);
      $p->setObjetivo($objetivo);
      $p->setDiretorGeral($diretorGeral);
      $p->setIncluidoEm($incluidoEm);
      $p->setUltimaAlteracao($ultimaAlteracao);
      $p->setPortariaPai($portariaPai);
      $p->setPortariaPaiAno($portariaPaiAno);
      $p->setRevogaPai($revogaPai);
      $p->setStatus($status);

      return $pDao->editar($p);
   }

   function listarPortaria() {
      $pDao = new PortariaDao();
      return $pDao->listar();
   }

   function buscarPortaria($numero) {
      $pDao = new PortariaDao();
      return $pDao->buscar($numero);
   }
}
