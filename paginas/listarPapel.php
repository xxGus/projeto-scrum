<?php
require_once "../paginas/header.php";
require_once '../controles/PapelCtrl.php';
require_once '../entidades/Papel.php';
$pCtrl = new PapelCtrl();
$papeis = $pCtrl->listarPapel();
?>
<script type="text/javascript" src="../js/tabela.js"></script>
<div id="listagem" class="container-fluid">
    <section class="bg-light">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h3 class="page-header">Papeis cadastrados</h3>
                <hr />
                <div class="table-responsive">
                    <table id="tabela" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Papel</th>
                                <th>Status</th>
                                <th>Alterar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($p = $papeis->fetch(PDO::FETCH_OBJ)): ?>
                                <tr>
                                    <td><?php echo $p->idPapel ?></td>
                                    <td><?php echo $p->papel ?></td>
                                    <?php
                                    if ($p->status == 1) {
                                        ?>
                                        <td>Inativo</td>
                                        <?php 
                                    }else{
                                        ?>
                                        <td>Ativo</td>
                                        <?php } ?>
                                        <td><a href="editarPapel.php?idPapel=<?php echo $p->idPapel ?>" class="btn btn-danger btn-sm">Alterar</a></td>
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