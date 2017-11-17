<?php
require_once "../paginas/header.php";
require_once '../controles/PessoaCtrl.php';
require_once '../entidades/Pessoa.php';
require_once '../controles/PerfilCtrl.php';
require_once '../controles/PessoaPerfilCtrl.php';
$pCtrl = new PessoaCtrl();
$codigo = $_GET['idPessoa'];
$p = $pCtrl->buscarPessoa($codigo);
$pessoa = $p->fetch(PDO::FETCH_OBJ);
$ppCtrl = new PessoaPerfilCtrl();
$perCtrl = new PerfilCtrl();
$perfis = $perCtrl->perfilAtivo();
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
<article id="registre-se" style="margin-top: 4%;">
    <aside class="container-fluid">
        <div class="col-lg-8 mx-auto">
            <h3 class="page-header">Editar Pessoa</h3>
            <form action="../intermediadoras/intermediadorPessoa.php" method="post">
                <input type="hidden" name="pessoa-submit" value="Alterar"/>
                <input type="hidden" class="form-control" id="idPessoa" name="idPessoa" value="<?php echo $pessoa->idPessoa; ?>">
                <!-- area de campos do form -->
                <hr />
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" maxlength="50" name="nome" required value="<?php echo $pessoa->nome; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="perfil">Perfil:</label>
                        <select class="form-control" id="perfil" name="perfil">
                            <?php
                                    //Buscar o perfil da pessoa
                            $pe = $ppCtrl->buscarPerfilDaPessoa($pessoa->idPessoa);
                            $perfPess = $pe->fetch(PDO::FETCH_OBJ);
                            $idPerf = $perfPess->idPerfil;
                            $perf = $perCtrl->buscarPerfil($idPerf);
                            $per = $perf->fetch(PDO::FETCH_OBJ);
                            ?>
                            <option value="<?php echo $per->idPerfil ?>"><?php echo $per->perfil ?></option>
                            <?php while($perfil = $perfis->fetch(PDO::FETCH_OBJ)): 
                            if($per->idPerfil != $perfil->idPerfil){
                                ?>
                                <option value="<?php echo $perfil->idPerfil ?>"><?php echo $perfil->perfil ?></option>
                                <?php } ?>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <?php
                            if ($pessoa->status == 1) {
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
                        <div class="form-group col-md-3">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required value="<?php echo $pessoa->cpf; ?>" onblur="validarCPF(this.id);" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="siape">SIAPE:</label>
                            <input type="text" class="form-control" id="siape" name="siape" value="<?php echo $pessoa->siape; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="email">E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email" maxlength="50" required value="<?php echo $pessoa->email; ?>" onblur="validarEmail(this.id);">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="siape">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa->telefone; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="siape">Celular:</label>
                            <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $pessoa->celular; ?>" required>
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
    </article>