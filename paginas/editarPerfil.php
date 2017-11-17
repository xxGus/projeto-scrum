<?php
require_once "../paginas/header.php";
require_once '../controles/PerfilCtrl.php';
require_once '../entidades/Perfil.php';
$pCtrl = new PerfilCtrl();
$codigo = $_GET['idPerfil'];
$p = $pCtrl->buscarPerfil($codigo);
$perfil = $p->fetch(PDO::FETCH_OBJ);
?>
<aside class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <h3 class="page-header">Editar Perfil</h3>
        <form action="../intermediadoras/intermediadorPerfil.php" method="post">
            <input type="hidden" class="form-control" id="idPerfil" name="idPerfil" value="<?php echo $perfil->idPerfil; ?>">
            <input type="hidden" name="perfil-submit" value="Alterar"/>
            <!-- area de campos do form -->
            <hr />
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="perfil">Perfil:</label>
                    <input type="text" class="form-control" id="perfil" maxlength="50" name="perfil" required value="<?php echo $perfil->perfil; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <?php
                        if ($perfil->status == 1) {
                            ?>
                            <option value="1">Inativo</option>
                            <option value="0">Ativo</option>
                            <?php
                        } else {
                            ?>
                            <option value="0">Ativo</option>
                            <option value="1">Inativo</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-7">
                        <input type="submit" class="btn btn-success" name="alterar" id="alterar" value="Alterar"/>
                    </div>
                </div>
                <hr />
            </form>
        </div>
    </aside>