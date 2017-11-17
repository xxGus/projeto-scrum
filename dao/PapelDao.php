<?php
require_once 'Conexao.php';
require_once '../entidades/Papel.php';
class PapelDao {
    
function cadastrar(Papel $p) {
        try {
            $conexao = new conexao();
            $con = $conexao->newConnection();
            $sql = "INSERT INTO papel(papel, status) VALUES(?,?)";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getPapel());
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
            $sql = "SELECT * FROM papel";
            $stm = $con->prepare($sql);

            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi listar os papeis cadastrados!');</script>";
            die($ex->getMessage());
        }
    }

    function buscar($id) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT * FROM papel WHERE idPapel = ?";
            $stm = $con->prepare($sql);
            $stm->bindParam(1, $id, PDO::PARAM_INT);
            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi possível buscar o papel selecionado!');</script>";
            die($ex->getMessage());
        }
    }
    
    function ativos() {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT * FROM papel WHERE status = 0";
            $stm = $con->prepare($sql);
            $stm->execute();

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi listar os papeis ativos!');</script>";
            die($ex->getMessage());
        }
    }

    function editar(Papel $p) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "UPDATE papel SET papel = ?,status = ? WHERE idPapel = ?";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getPapel());
            $stm->bindValue(2, $p->getStatus());
            $stm->bindValue(3, $p->getIdPapel());

            return $stm->execute();
        } catch (Exception $ex) {
            return false;
        }
    }
}