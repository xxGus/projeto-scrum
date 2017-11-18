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
            <div id="contrato" class="form-group col-md-12 checkbox"
                 onclick="habilita_div(document.getElementById('div-contrato'), document.getElementById('chk-contrato'))">
                <label class="contrato">
                    Essa Portaria possui contrato ?
                    <input id="chk-contrato" type="checkbox" name="contrato" ">
                </label>
            </div>
            <div id="portaria-anterior" class="form-group col-md-12 checkbox"
                 onclick="habilita_div(document.getElementById('div-portaria-anterior'), document.getElementById('chk-portaria-anterior'))">
                <label class="portaria-anterior">
                    Essa Portaria faz referência a uma Postaria Anterior?
                    <input id="chk-portaria-anterior" type="checkbox" name="portaria-anterior">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea id="artigo" class="form-control artigo" type="text" name="artigo" placeholder="Art 1º"
                          required></textarea>
            </div>
        </div>


        <div id="div-contrato" class="row">
            <div class="col-md-3 cmp-contrato">
                <div class="font-weight-bold">
                    Contrato Nº
                </div>
                <div class="">
                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-3 cmp-empresa">
                <div class="font-weight-bold">
                    Empresa
                </div>
                <div class="">
                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-6 cmp-objeto">
                <div class="font-weight-bold">
                    Objeto
                </div>
                <div class="">
                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-12 cmp-artigo2">
                <textarea id="artigo-2" class="form-control artigo" type="text" name="artigo" placeholder="Art 2º" required></textarea>
            </div>
        </div>

        <div class="col-md-12 row data-ini-fim">
            <div class="col-md-4">
                <label class="font-weight-bold" for="inicio">Data Inicio:</label>
                <input type="date" name="inicio">
            </div>
            <div class="col-md-7">
                <label class="font-weight-bold" for="fim">Data Fim:</label>
                <input type="date" name="fim">
            </div>

            <div class="form-group col-md-12 dropdown-divider-dir">
                <label class="font-weight-bold label-dir-ger col-md-6" for="diretor">Diretor Geral:</label>
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

        <div id="div-portaria-anterior" class="row">
            <div class="form-group col-md-12">
                <label class="label-portaria">Essa Portaria faz REFERÊNCIA a Portaria nº BRA.:</label>
                <input type="text" name="numero" placeholder="número"> /
                <input type="text" name="ano" placeholder="ano">
            </div>

            <div class="form-group col-md-12">
                <textarea id="ref-portaria" class="form-control ref-portaria" type="text" name="ref-portaria"
                          placeholder="Preencher aqui com as principais informções da Portaria que está se referenciando" required></textarea>
            </div>

            <div id="revoga-portaria" class="form-group col-md-12 checkbox">
                <label class="revoga-portaria font-weight-bold">
                    Revoga portaria de REFERÊNCIA?
                    <input id="chk-revoga-portaria" type="checkbox" name="chk-revoga-portaria">
                </label>
            </div>
        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-success" name="cadastro" id="cadastro" value="Cadastrar"/>
        </div>
    </form>
</aside>