<?php
require_once "../paginas/header.php";
require_once '../controles/PapelCtrl.php';
require_once '../entidades/Papel.php';
$pCtrl = new PapelCtrl();
$codigo = $_GET['idPapel'];
$p = $pCtrl->buscarPapel($codigo);
$papel = $p->fetch(PDO::FETCH_OBJ);
?>

<aside class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <h3 class="page-header">Editar Papel</h3>
        <form action="../intermediadoras/intermediadorPapel.php" method="post">
            <input type="hidden" name="papel-submit" value="Alterar"/>
            <input type="hidden" class="form-control" id="idPapel" name="idPapel" value="<?php echo $papel->idPapel; ?>">
            <!-- area de campos do form -->
            <hr />
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="papel">Papel:</label>
                    <input type="text" class="form-control" id="papel" maxlength="80" name="papel" required value="<?php echo $papel->papel; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <?php
                        if ($papel->status == 1) {
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