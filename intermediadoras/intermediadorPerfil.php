<?php
require_once "../paginas/header.php";
?>
<?php
require_once '../controles/PerfilCtrl.php';
require_once '../entidades/Perfil.php';

$_SERVER["REQUEST_METHOD"] == "POST";

if ($_POST['perfil-submit'] == "Cadastrar") {
    $perfil = $_POST['perfil'];
    
    $pCtrl = new PerfilCtrl();
    $retorno = $pCtrl->cadastrarPerfil($perfil);

    if($retorno == true){
        echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Perfil cadastrado com sucesso!</strong></div>";
    }else{
        echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar perfil, dica: verifique se o mesmo já não está cadastrado.</strong></div>";
    }
}

if ($_POST['perfil-submit'] == "Alterar") {
    $perfil = $_POST['perfil'];
    $idPerfil = $_POST['idPerfil'];
    $status = $_POST['status'];
    
    $pCtrl = new PerfilCtrl();
    $retorno = $pCtrl->editarPerfil($perfil, $status, $idPerfil);

    if($retorno == true){
        echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Perfil alterado com sucesso!</strong></div>";
    }else{
        echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao alterar perfil!</strong></div>";
    }
}