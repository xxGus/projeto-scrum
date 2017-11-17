<?php
require_once "../paginas/header.php";
require_once '../controles/PortariaCtrl.php';



$pCtrl = new PortariaCtrl();
$portaria = $pCtrl->listarPortaria();

?>
<script type="text/javascript" src="../js/tabela.js"></script>
<div id="listagem" class="container-fluid">
    <section class="bg-light">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h3 class="page-header">Portarias cadastradas</h3>
                <hr />
                <div class="table-responsive">
                    <table id="tabela" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Dispõe Sobre</th>
                                <th>Contrato</th>
                                <th>Empresa</th>
                                <th>Objeto</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Objetivo</th>
                                <th>Incuido Em</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($p = $portaria->fetch(PDO::FETCH_OBJ)): ?>
                                <tr>
                                  <td><?php echo $p->portariaData ?></td>
                                  <td><?php echo $p->dispoe ?></td>
                                  <td><?php echo $p->contrato ?></td>
                                  <td><?php echo $p->empresa ?></td>
                                  <td><?php echo $p->objeto ?></td>
                                  <td><?php echo $p->dataInicio ?></td>
                                  <td><?php echo $p->dataFim ?></td>
                                  <td><?php echo $p->objetivo ?></td>
                                  <td><?php echo $p->incluidoEm ?></td>
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