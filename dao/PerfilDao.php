<?php

require_once 'Conexao.php';
require_once '../entidades/Perfil.php';

class PerfilDao {

    function cadastrar(Perfil $p) {
        try {
            $conexao = new conexao();
            $con = $conexao->newConnection();
            $sql = "INSERT INTO perfil(perfil, status) VALUES(?,?)";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getPerfil());
            $stm->bindValue(2, $p->getStatus());

            return $stm->execute();
        } catch (Exception $ex) {
            return false;
        }
    }

    function listar() {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT * FROM perfil";
            $stm = $con->prepare($sql);

            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi listar os perfis cadastrados!');</script>";
            die($ex->getMessage());
        }
    }

    function buscar($id) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT * FROM perfil WHERE idPerfil = ?";
            $stm = $con->prepare($sql);
            $stm->bindParam(1, $id, PDO::PARAM_INT); //Alterado (antigo: bindValue sem o PDO::PARAM_STR no final) Icaro: Não seria um PARAM_INT pois o ID é int no banco
            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi possível buscar o perfil selecionado!');</script>";
            die($ex->getMessage());
        }
    }
    
    function ativos() {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT * FROM perfil WHERE status = 0";
            $stm = $con->prepare($sql);
            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi listar os perfis ativos!');</script>";
            die($ex->getMessage());
        }
    }

    function editar(Perfil $p) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "UPDATE perfil SET perfil = ?,status = ? WHERE idPerfil = ?";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getPerfil());
            $stm->bindValue(2, $p->getStatus());
            $stm->bindValue(3, $p->getIdPerfil());

            return $stm->execute();
        } catch (Exception $ex) {
            return false;
        }
    }
}