<?php

require_once 'Conexao.php';
require_once '../entidades/Portaria.php';

class PortariaDao {

   function cadastrar(Portaria $p) {
      try {
         $conexao = new conexao();
         $con = $conexao->newConnection();
         $sql = "INSERT INTO portaria(ano, portaria, portariaData, idCampus, dispoe, texto1Cont, texto3, texto4, contrato, empresa, objeto, dataInicio, dataFim, objetivo, diretorGeral, incluidoEm, ultimaAlteracao, portariaPai, portariaPaiAno, revogaPai, status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         $stm = $con->prepare($sql);

         $stm->bindValue(1, $p->getAno());
         $stm->bindValue(2, $p->getPortaria());
         $stm->bindValue(3, $p->getPortariaData());
         $stm->bindValue(4, $p->getIdCampus());
         $stm->bindValue(5, $p->getDispoe());
         $stm->bindValue(6, $p->getTexto1Cont());
         $stm->bindValue(7, $p->getTexto3());
         $stm->bindValue(8, $p->getTexto4());
         $stm->bindValue(9, $p->getContrato());
         $stm->bindValue(10, $p->getEmpresa());
         $stm->bindValue(11, $p->getObjeto());
         $stm->bindValue(12, $p->getDataInicio());
         $stm->bindValue(13, $p->getDataFim());
         $stm->bindValue(14, $p->getObjetivo());
         $stm->bindValue(15, $p->getDiretorGeral());
         $stm->bindValue(16, $p->getIncluidoEm());
         $stm->bindValue(17, $p->getUltimaAlteracao());
         $stm->bindValue(18, $p->getPortariaPai());
         $stm->bindValue(19, $p->getPortariaPaiAno());
         $stm->bindValue(20, $p->getRevogaPai());
         $stm->bindValue(21, $p->getStatus());


         $stm->execute();

         if($stm->rowCount() > 0) {
            return true;

         } else {
            return $stm->errorInfo();

         }
      } catch (Exception $ex) {
         die($ex->getMessage());
      }
   }
   function listar() {
      try {
         $conexao = new Conexao();
         $con = $conexao->newConnection();
         $sql = "SELECT * FROM portaria";
         $stm = $con->prepare($sql);

         $stm->execute();

         return $stm;
      } catch (Exception $ex) {
         die($ex->getMessage());
      }
   }
   function buscar($numero) {
      try {
         $conexao = new Conexao();
         $con = $conexao->newConnection();
         $sql = "SELECT * FROM portaria WHERE id = ?";
         $stm = $con->prepare($sql);
         $stm->bindValue(1, $numero, PDO::PARAM_INT);
         $stm->execute();

         return $stm;
      } catch (Exception $ex) {
         die($ex->getMessage());
      }
   }
   function editar(Portaria $p, $idAtual) {
      try {
         $conexao = new Conexao();
         $con = $conexao->newConnection();
         $sql = "UPDATE portaria SET ano = ?, portaria = ?, portariaData = ?, ipCampus = ?, dispoe = ?, texto1Cont = ?, testo3 = ?, testo4 = ?, contrato = ?, empresa = ?, objeto = ?, dataInicio = ?, dataFim = ?, objetivo = ?, diretorGeral = ?, incluidoEm = ?, ultimaAlteracao = ?, portariaPai = ?, portariaPaiAno = ?, revogaPai = ?, status = ? WHERE id = ?";
         $stm = $con->prepare($sql);

         $stm->bindValue(1, $p->getAno());
         $stm->bindValue(2, $p->getPortaria());
         $stm->bindValue(3, $p->getPortariaData());
         $stm->bindValue(4, $p->getIdCampus());
         $stm->bindValue(5, $p->getDispoe());
         $stm->bindValue(6, $p->getTesto1Cont());
         $stm->bindValue(7, $p->getTesto3());
         $stm->bindValue(8, $p->getTesto4());
         $stm->bindValue(9, $p->getContrato());
         $stm->bindValue(10, $p->getEmpresa());
         $stm->bindValue(11, $p->getObjeto());
         $stm->bindValue(12, $p->getDataInicio());
         $stm->bindValue(13, $p->getDataFim());
         $stm->bindValue(14, $p->getObjetivo());
         $stm->bindValue(15, $p->getDiretorGeral());
         $stm->bindValue(16, $p->getIncluidoEm());
         $stm->bindValue(18, $p->getUltimaAlteracao());
         $stm->bindValue(19, $p->getPortariaPai());
         $stm->bindValue(19, $p->getPortariaPaiAno());
         $stm->bindValue(20, $p->getRevogaPai());
         $stm->bindValue(21, $p->getStatus());

         $stm->execute();

         if($stm->rowCount() > 0) {

         } else {

         }
      } catch (Exception $ex) {
         die($ex->getMessage());
      }
   }
}
