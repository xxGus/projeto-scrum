<?php
require_once "../paginas/header.php";
require_once '../controles/PerfilCtrl.php';
require_once '../entidades/Perfil.php';
$pCtrl = new PerfilCtrl();
$perfis = $pCtrl->listarPerfil();
?>
<script type="text/javascript" src="../js/tabela.js"></script>
<div id="listagem" class="container-fluid">
    <section class="bg-light">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h3 class="page-header">Perfis cadastrados</h3>
                <hr />
                <div class="table-responsive">
                    <table id="tabela" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Perfil</th>
                                <th>Status</th>
                                <th>Alterar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($p = $perfis->fetch(PDO::FETCH_OBJ)): ?>
                                <tr>
                                    <td><?php echo $p->idPerfil ?></td>
                                    <td><?php echo $p->perfil ?></td>
                                    <?php
                                    if ($p->status == 1) {
                                        ?>
                                        <td>Inativo</td>
                                        <?php 
                                    }else{
                                        ?>
                                        <td>Ativo</td>
                                        <?php } ?>
                                        <td><a href="editarPerfil.php?idPerfil=<?php echo $p->idPerfil ?>" class="btn btn-danger btn-sm">Alterar</a></td>
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