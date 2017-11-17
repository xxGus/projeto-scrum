<?php
require_once "../paginas/header.php";
require_once '../controles/AssociacaoCtrl.php';

$aCtrl = new AssociacaoCtrl();

if(isset($_GET["membro"])) {
  $associacao = $aCtrl->listarAssociacao($_GET["membro"]);
}else{
  $associacao = $aCtrl->listarAssociacao();
}
   
?>
<script type="text/javascript" src="../js/tabela.js"></script>
<div id="listagem" class="container-fluid">
    <section class="bg-light">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h3 class="page-header">Associações</h3>
                <hr />
                <div class="table-responsive">
                    <table id="tabela" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Ano</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Incluido Em</th>
                                <th>Ultima Alteracao</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($a = $associacao->fetch(PDO::FETCH_OBJ)): ?>
                                <tr>
                                    <td><?php echo $a->ano ?></td>
                                    <td><?php echo $a->dataInicio ?></td>
                                    <td><?php echo $a->dataFim ?></td>
                                    <td><?php echo $a->incluidoEm ?></td>
                                    <td><?php echo $a->ultimaAlteracao ?></td>
                                </tr> 
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <hr />
            </div>
        </div>
    </section>
</div>
