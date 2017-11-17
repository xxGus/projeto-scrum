<?php
   require_once "../paginas/header.php";
   require_once '../controles/PortariaCtrl.php';
   require_once '../entidades/Portaria.php';

   $_SERVER["REQUEST_METHOD"] == "POST";

if ($_POST['portaria-submit'] == "Cadastrar") {


   $ano = $_POST['ano'];
   $portaria = $_POST['numero'];
   $portariaData = $_POST['data'];
   $idCampus = 1;
   $dispoe = $_POST['dispoe'];
   $texto1Cont = $_POST['texto'];
   $texto3 = $_POST['artigo'];
   $texto4 = $_POST['artigo2'];   
   $contrato = $_POST['num-contrato'];
   $empresa = $_POST['empresa'];
   $objeto = $_POST['objeto'];
   $dataInicio = $_POST['inicio'];
   $dataFim = $_POST['fim'];
   $objetivo = $_POST['objetivo'];
   $diretorGeral = 1;//$_POST['diretor'];
   $incluidoEm = date("Y-m-d");
   $ultimaAlteracao = date("Y-m-d");
   $portariaPai = null;
   $portariaPaiAno = null;
   $revogaPai = null;
   $status = 1;

   $pCtrl = new PortariaCtrl();
   $retorno = $pCtrl->cadastrarPortaria($ano, $portaria, $portariaData, $idCampus, $dispoe, $texto1Cont, $texto3, $texto4, $contrato, $empresa, $objeto, $dataInicio, $dataFim, $objetivo, $diretorGeral, $incluidoEm, $ultimaAlteracao, $portariaPai, $portariaPaiAno, $revogaPai, $status);

   print_r($retorno);

   if($retorno > 0){
      echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Portaria cadastrada com sucesso!</strong></div>";
   }else{
      echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar Portaria, dica: Verifique se a mesma já não está cadastrada!</strong></div>";
   }
}
if ($_POST['portaria-submit'] == "Alterar") {

   $objetivo = $_POST['objetivo'];
   $numero = $_POST['numero'];
   $ano = $_POST['ano'];
   $data = $_POST['data'];
   $dispoe = $_POST['dispoe'];
   $texto1 = $_POST['texto1'];
   $contrato = $_POST['contrato'];
   $outraPortaria = $_POST['outraPortaria'];
   $artigo = $_POST['artigo'];
   $inicio = $_POST['inicio'];
   $fim = $_POST['fim'];
   $diretor = $_POST['diretor'];
   $ativa = $_POST['ativa'];

   $pCtrl = new PortariaCtrl();
   echo $pCtrl->editarPortaria($ano, $portaria, $portariaData, $idCampus, $dispoe, $testo1Cont, $testo3, $testo4, $contrato, $empresa, $objeto, $dataInicio, $dataFim, $objetivo, $diretorGeral, $incluidoEm, $ultimaAlteracao, $portariaPai, $portariaPaiAno, $revogaPai, $status);

   if($retorno > 0){
      echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Portaria cadastrada com sucesso!</strong></div>";
   }else{
      echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar Portaria, dica: Verifique se a mesma já não está cadastrada!</strong></div>";
   }
}
