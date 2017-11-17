<?php
require_once "../paginas/header.php";
?>
<?php
require_once '../controles/PapelCtrl.php';
require_once '../entidades/Papel.php';

$_SERVER["REQUEST_METHOD"] == "POST";

if ($_POST['papel-submit'] == "Cadastrar") {
    $papel = $_POST['papel'];
    
    $pCtrl = new PapelCtrl();
    $retorno = $pCtrl->cadastrarPapel($papel);

    if($retorno == true){
        echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Papel cadastrado com sucesso!</strong></div>";
    }else{
        echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar papel, dica: verifique se o mesmo já não está cadastrado.</strong></div>";
    }
}

if ($_POST['papel-submit'] == "Alterar") {
    $papel = $_POST['papel'];
    $idPapel = $_POST['idPapel'];
    $status = $_POST['status'];
    
    $pCtrl = new PapelCtrl();
    $retorno = $pCtrl->editarPapel($papel, $status, $idPapel);

    if($retorno == true){
        echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Papel alterado com sucesso!</strong></div>";
    }else{
        echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao alterar papel!</strong></div>";
    }
}