<?php

require_once 'Conexao.php';
require_once '../entidades/Pessoa.php';

class PessoaDao {

    function cadastrar(Pessoa $p) {
        try {
            $conexao = new conexao();
            $con = $conexao->newConnection();
            $sql = "INSERT INTO pessoa(nome,cpf,siape,email,telefone,celular, status) VALUES(?,?,?,?,?,?,?)";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getNome());
            $stm->bindValue(2, $p->getCpf());
            $stm->bindValue(3, $p->getSiape());
            $stm->bindValue(4, $p->getEmail());
            $stm->bindValue(5, $p->getTelefone());
            $stm->bindValue(6, $p->getCelular());
            $stm->bindValue(7, $p->getStatus());

            $stm->execute();
            //echo  "<script>alert('Cadastro realizado com sucesso!');</script>";       
            $id = $con->lastInsertId("idPessoa"); // É pra retornar o id inserido    
            return $id;
        } catch (Exception $ex) {
            return 0;
        }
    }

    function listar() {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "SELECT * FROM pessoa";
            $stm = $con->prepare($sql);

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
            $sql = "SELECT * FROM pessoa WHERE idPessoa = ?";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $id, PDO::PARAM_INT);
            $stm->execute();   

            return $stm;
        } catch (Exception $ex) {
            echo  "<script>alert('Não foi possível buscar a pessoa selecionada!');</script>";
            die($ex->getMessage());
        }
    }

    function editar(Pessoa $p) {
        try {
            $conexao = new Conexao();
            $con = $conexao->newConnection();
            $sql = "UPDATE pessoa SET nome = ?,cpf = ?,siape = ?,email = ?,telefone = ?,celular = ?, status = ? WHERE idPessoa = ?";
            $stm = $con->prepare($sql);

            $stm->bindValue(1, $p->getNome());
            $stm->bindValue(2, $p->getCpf());
            $stm->bindValue(3, $p->getSiape());
            $stm->bindValue(4, $p->getEmail());
            $stm->bindValue(5, $p->getTelefone());
            $stm->bindValue(6, $p->getCelular());
            $stm->bindValue(7, $p->getStatus());
            $stm->bindValue(8, $p->getIdPessoa());

            return $stm->execute();
        } catch (Exception $ex) {
            return false;
        }
    }
}