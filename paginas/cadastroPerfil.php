
<?php
require_once "../paginas/header.php";
?>
<aside class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <h3 class="page-header">Cadastro de Perfil</h3>
        <form action="../intermediadoras/intermediadorPerfil.php" method="post">
            <input type="hidden" name="perfil-submit" value="Cadastrar"/>
            <!-- area de campos do form -->
            <hr />
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="perfil">Perfil:</label>
                    <input type="text" class="form-control" id="perfil" name="perfil" required maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-7">
                    <input type="submit" class="btn btn-success" name="cadastro" id="cadastro" value="Cadastrar"/>
                </div>
            </div>
            <hr />
        </form>
    </div>
</aside>