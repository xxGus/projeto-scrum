<?php

require_once 'Conexao.php';
require_once '../entidades/PessoaPerfil.php';

class PessoaPerfilDao {

    function cadastrar(PessoaPerfil $p) {
        try {
            $conexao = new conexao();
            $con = $conexao->newConnection();
            $sql = "INSERT INTO pessoa_perfil(idPessoa,idPerfil,status) VALUES(?,?,?)";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getPessoa());
            $stm->bindValue(2, $p->getPerfil());
            $stm->bindValue(3, $p->getStatus());

            $stm->execute();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    
    function buscar($id) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT idPerfil FROM pessoa_perfil WHERE idPessoa = ?";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $id, PDO::PARAM_INT);
            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não encontrado!');</script>";
            die($ex->getMessage());
        }
    }
    function editar(PessoaPerfil $p) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "UPDATE pessoa_perfil SET idPerfil = ?,status = ? WHERE idPessoa = ?";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getPerfil());
            $stm->bindValue(2, $p->getStatus());
            $stm->bindValue(3, $p->getPessoa());

            $stm->execute();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
}
