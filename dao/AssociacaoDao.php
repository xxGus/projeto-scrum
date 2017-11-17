<?php

require_once 'Conexao.php';
require_once '../entidades/Associacao.php';

class AssociacaoDao {

   function cadastrar(Associacao $a) {
      try {
         $conexao = new conexao();
         $con = $conexao->newConnection();
         
         $sql = "INSERT INTO comissao(ano,portaria,idPessoa,idPerfil,idPapel,dataInicio,dataFim,incluidoEm,ultimaAlteracao,status) VALUES(?,?,?,?,?,?,?,?,?,?)";
         $stm = $con->prepare($sql);

         $stm->bindValue(1, $a->getAno());
         $stm->bindValue(2, $a->getPortaria());
         $stm->bindValue(3, $a->getIdPessoa());
         $stm->bindValue(4, $a->getIdPerfil());
         $stm->bindValue(5, $a->getIdPapel());
         $stm->bindValue(6, $a->getDataInicio());
         $stm->bindValue(7, $a->getDataFim());
         $stm->bindValue(8, $a->getIncluidoEm());
         $stm->bindValue(9, $a->getUltimaAlteracao());
         $stm->bindValue(10, $a->getstatus());

         $stm->execute();

         if($stm->rowCount() > 0) {

         } else {

         }
      } catch (Exception $ex) {
         die($ex->getMessage());
      }
   }

   function listar() {
      $listAssociacao = func_get_args();
      $id = implode("", $listAssociacao[0]);

      try {
         $conexao = new Conexao();
         $con = $conexao->newConnection();
         $sql = "SELECT * FROM comissao";

         if(empty($id)) {            
            $sql = "SELECT * FROM comissao";

            $stm = $con->prepare($sql);
         } else {            
            $sql = "SELECT * FROM comissao WHERE idPessoa = ?";

            $stm = $con->prepare($sql);
            $stm->bindValue(1,$id);
         }

         $stm->execute();

         return $stm;
      } catch (Exception $ex) {
         echo  "<script>alert('Não foi listar as pessoas cadastradas!');</script>";
         die($ex->getMessage());
      }
   }

   function buscar($id) {
      try {
         $conexao = new Conexao();
         $con = $conexao->newConnection();
         $sql = "SELECT * FROM comissao WHERE id = ?";
         $stm = $con->prepare($sql);
         $stm->bindValue(1, $id, PDO::PARAM_INT);
         $stm->execute();

         return $stm;
      } catch (Exception $ex) {
         echo  "<script>alert('Não foi possível buscar a pessoa selecionada!');</script>";
         die($ex->getMessage());
      }
   }

   function editar(Associacao $a) {
      try {
         $conexao = new Conexao();
         $con = $conexao->newConnection();

         $sql = "UPDATE comissao SET ano = ?,portaria = ?,idPessoa = ?,idPerfil = ?,idPapel = ?,dataInicio = ?,dataFim = ?,incluidoEm = ?,ultimaAlteracao = ?,status = ? WHERE id = ?";
         $stm = $con->prepare($sql);         

         $stm->bindValue(1, $a->getAno());
         $stm->bindValue(2, $a->getPortaria());
         $stm->bindValue(3, $a->getIdPessoa());
         $stm->bindValue(4, $a->getIdPerfil());
         $stm->bindValue(5, $a->getIdPapel());
         $stm->bindValue(6, $a->getDataInicio());
         $stm->bindValue(7, $a->getDataFim());
         $stm->bindValue(8, $a->getIncluidoEm());
         $stm->bindValue(9, $a->getUltimaAlteracao());
         $stm->bindValue(10, $a->getstatus());

         $stm->execute();

         if($cadastro->rowCount() > 0) {
         } else {
         }

      } catch (Exception $ex) {
         die($ex->getMessage());
      }
   }
}
