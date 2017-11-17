<?php
   require_once "../paginas/header.php";
   require_once '../control/AssociacaoCtrl.php';
   require_once '../model/Associacao.php';

   $_SERVER["REQUEST_METHOD"] == "POST";

if ($_POST['associacao-submit'] == "Cadastrar") {
   $tipo = $_POST['tipo'];
   $nome = $_POST['nome'];
   $dataInicio = $_POST['data-inicio'];
   $dataFim = $_POST['data-fim'];
   $assunto = $_POST['assunto'];
   $objetivo = $_POST['objetivo'];
   //$listaMembros = $_POST['membros'];
   //$listaPortarias = $_POST['portarias'];

   $aCtrl = new AssociacaoCtrl();
   $aCtrl->cadastrarAssociacao($tipo, $nome, $dataInicio, $dataFim, $assunto, $objetivo/*, $listaMembros, $listaPortarias*/);

   if($retorno > 0){
      echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Associação cadastrada com sucesso!</strong></div>";
   }else{
      echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar Associação, dica: Verifique se a mesma já não está cadastrada!</strong></div>";
   }
} 
if ($_POST['associacao-submit'] == "Alterar") {
   $tipo = $_POST['tipo'];
   $nome = $_POST['nome'];
   $dataInicio = $_POST['data-inicio'];
   $dataFim = $_POST['data-fim'];
   $assunto = $_POST['assunto'];
   $objetivo = $_POST['objetivo'];
   //$listaMembros = $_POST['membros'];
   //$listaPortarias = $_POST['portarias'];

   $aCtrl = new AssociacaoCtrl();
   $aCtrl->editarAssociacao($tipo, $nome, $dataInicio, $dataFim, $assunto, $objetivo/*, $listaMembros, $listaPortarias*/);

   if($retorno > 0){
      echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Associação cadastrada com sucesso!</strong></div>";
   }else{
      echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar Associação, dica: Verifique se a mesma já não está cadastrada!</strong></div>";
   }
}
