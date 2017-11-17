<?php
require_once "../paginas/header.php";
require_once '../controles/PerfilCtrl.php';
require_once '../entidades/Perfil.php';
$pCtrl = new PerfilCtrl();
$perfis = $pCtrl->perfilAtivo();
?>
<script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="../js/cpf.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#cpf").mask("999.999.999-99");
        $("#telefone").mask("(99) 9999-9999");
        $("#celular").mask("(99) 99999-9999");
        $("#siape").mask("9999999");
    });
</script>
<aside class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <h3 class="page-header">Cadastro de Pessoa</h3>
        <form action="../intermediadoras/intermediadorPessoa.php" method="post">
            <input type="hidden" name="pessoa-submit" value="Cadastrar"/>
            <!-- area de campos do form -->
            <hr />
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required maxlength="50">
                </div>
                <div class="form-group col-md-4">
                    <label for="perfil">Perfil:</label>
                    <select class="form-control" id="perfil" name="perfil">
                        <?php while($p = $perfis->fetch(PDO::FETCH_OBJ)): ?>
                            <option value="<?php echo $p->idPerfil ?>"><?php echo $p->perfil ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" onblur="validarCPF(this.id);">
                </div>
                <div class="form-group col-md-2">
                    <label for="siape">SIAPE:</label>
                    <input type="text" class="form-control" id="siape" name="siape">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" id="email" name="email" maxlength="50" onblur="validarEmail(this.id);">
                </div>
            </div>
            <div class="row">
             <div class="form-group col-md-3">
                <label for="siape">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group col-md-3">
                <label for="siape">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" required>
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