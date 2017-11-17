<?php

class Conexao {

    function newConnection() {
        try {
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ifsp_portaria', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}