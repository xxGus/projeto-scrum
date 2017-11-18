<?php
require_once "../paginas/header.php";

require_once '../controles/PerfilCtrl.php';
require_once '../entidades/Perfil.php';

$pCtrl = new PerfilCtrl();
$perfis = $pCtrl->perfilAtivo();
?>

<aside class="container">
    <h3 class="page-header">ministério da educação<br>instituto federal de educação, ciência e tecnologia de são
        paulo</h3>
    <form action="../intermediadoras/intermediadorPortaria.php" method="post">
        <input type="hidden" name="portaria-submit" value="Cadastrar"/>
        <!-- area de campos do form -->
        <div class="row">
            <div class="form-group col-md-12">
                <label class="label-objetivo" for="objetivo">Objetivo:</label>
                <textarea id="objetivo" class="form-control" type="text" name="objetivo" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="label-portaria">Portaria nº BRA .:</label>
                <input type="text" name="numero" placeholder="número"> /
                <input type="text" name="ano" placeholder="ano">
                <label>, de</label>
                <input type="date" name="data">
            </div>

            <div class="form-group col-md-12">
                <textarea id="dispoe" class="form-control" type="text" name="dispoe" placeholder="Dispõe sobre"
                          required></textarea>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-md-12">
                <label class="label-texto" for="objetivo"><span class="txt-dir-geral">o diretor geral do câmpus de bragança paulista do instituto federal de educação, ciência e tecnologia de são paulo,</span>
                    no uso de suas atribuições legais, considerando o que consta da Portaria nº 3.903, de
                    04.11.2015,</label>
                <textarea id="objetivo" class="form-control" type="text" name="texto" required></textarea>
                <label class="resolve">resolve:</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 checkbox">
                <label class="contrato">
                    Essa Portaria possui contrato ?
                    <input type="checkbox" name="contrato">
                </label>
            </div>
            <div class="form-group col-md-12 checkbox">
                <label class="portaria-anterior">
                    Essa Portaria faz referência a uma Postaria Anterior?
                    <input type="checkbox">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea id="artigo" class="form-control artigo" type="text" name="artigo" placeholder="ex.: Art 1º"
                          required></textarea>
            </div>
        </div>
        <div class="row data-ini-fim">
            <div class="col-md-4">
                <label class="font-weight-bold" for="inicio">Data Inicio:</label>
                <input type="date" name="inicio">
            </div>
            <div class="col-md-7">
                <label class="font-weight-bold" for="fim">Data Fim:</label>
                <input type="date" name="fim">
            </div>

            <div class="form-group col-md-12">
                <label class="font-weight-bold label-dir-ger" for="diretor">Diretor Geral:</label>
                <div class="col-md-6 select-dir">
                    <select class="form-control" id="diretor" name="diretor">
                        <?php //while($p = $perfis->fetch(PDO::FETCH_OBJ)): ?>
                        <!--<option value="<?php echo $p->idPerfil ?>"><?php echo $p->perfil ?></option>-->
                        <?php //endwhile; ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-12 font-weight-bold">
                <label class="label-portaria-ativa">
                    Portaria Ativa?
                    <input type="checkbox">
                </label>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" name="cadastro" id="cadastro" value="Cadastrar"/>
        </div>
    </form>
</aside>