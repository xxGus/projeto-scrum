<?php
require_once "../paginas/header.php";

require_once '../controles/PerfilCtrl.php';
require_once '../entidades/Perfil.php';

$pCtrl = new PerfilCtrl();
$perfis = $pCtrl->perfilAtivo();
?>

</script>
<aside class="container-fluid">
    <div class="col-lg-8 mx-auto">
        <h3 class="page-header">MINISTÉRIO DA EDUCAÇÃO<br/>INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DE SÃO PAULO</h3>
        <form action="../intermediadoras/intermediadorPortaria.php" method="post">
            <input type="hidden" name="portaria-submit" value="Cadastrar"/>
            <!-- area de campos do form -->
            <hr />
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="objetivo">Objetivo:</label>
                    <textarea id="objetivo" class="form-control" type="text" name="objetivo" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  <label>Portaria nº BRA.</label>
                  <input type="text" name="numero" placeholder="número">                  
                  <label>/</label>
                  <input type="text" name="ano" placeholder="ano">
                  <label>, de</label>
                  <input type="date" name="data">
                </div>

                <div class="form-group col-md-6">
                    <textarea id="dispoe" class="form-control" type="text" name="dispoe" placeholder="Dispõe sobre" required></textarea>
                </div>
            </div> 
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="objetivo">Texto:</label>
                    <textarea id="objetivo" class="form-control" type="text" name="texto" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="contrato">Essa Portaria possui contrato?</label>
                    <input type="radio" name="contrato">
                </div>
                <div class="form-group col-md-12">
                    <label for="portaria-anterior">Essa Portaria faz referência a uma Postaria Anterior?:</label>
                    <input type="radio" name="portaria-anterior">
                </div>
            </div>            
            <div class="row">
                <div class="form-group col-md-12">
                    <textarea id="artigo" class="form-control" type="text" name="artigo" required></textarea>
                </div>
            </div> 
            <div class="row">
                <div class="form-group col-md-3">
                    <textarea id="artigo" class="form-control" type="text" name="num-contrato" required></textarea>
                </div>
                <div class="form-group col-md-3">
                    <textarea id="artigo" class="form-control" type="text" name="empresa" required></textarea>
                </div>
                <div class="form-group col-md-6">
                    <textarea id="artigo" class="form-control" type="text" name="objeto" required></textarea>
                </div>
            </div> 
            <div class="row">
                <div class="form-group col-md-12">
                    <textarea id="artigo" class="form-control" type="text" name="artigo2" required></textarea>
                </div>
            </div> 
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inicio">Data Inicio</label>
                    <input type="date" name="inicio">
                    <label for="fim">Data Fim</label>
                    <input type="date" name="fim">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="diretor">Diretor Geral:</label>
                <select class="form-control" id="diretor" name="diretor">
                    <?php //while($p = $perfis->fetch(PDO::FETCH_OBJ)): ?>
                        <!--<option value="<?php echo $p->idPerfil ?>"><?php echo $p->perfil ?></option>-->
                    <?php //endwhile; ?>
                </select>
            </div> 
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="ativa">Portaria Ativa?</label>
                    <input type="radio" name="ativa">
                </div>
            </div> 

            <div class="form-group">
                <input type="submit" class="btn btn-success" name="cadastro" id="cadastro" value="Cadastrar"/>
            </div>    
        </form>
    </div>
</aside>