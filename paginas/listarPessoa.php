<?php
require_once "../paginas/header.php";
require_once '../controles/PerfilCtrl.php';
require_once '../controles/PessoaCtrl.php';
require_once '../entidades/Pessoa.php';
require_once '../controles/PessoaPerfilCtrl.php';
$pCtrl = new PessoaCtrl();
$pessoas = $pCtrl->listarPessoa();
$ppCtrl = new PessoaPerfilCtrl();
$perCtrl = new PerfilCtrl();
?>
<script type="text/javascript" src="../js/tabela.js"></script>
<div id="listagem" class="container-fluid">
    <section class="bg-light">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h3 class="page-header">Membros cadastrados</h3>
                <hr />
                <div class="table-responsive">
                    <table id="tabela" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>E-mail</th>
                                <th>SIAPE</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Perfil</th>
                                <th>Alterar</th>
                                <th>Comissões</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($p = $pessoas->fetch(PDO::FETCH_OBJ)): ?>
                                <tr>
                                    <td><?php echo $p->nome ?></td>
                                    <td><?php echo $p->cpf ?></td>
                                    <td><?php echo $p->email ?></td>
                                    <td><?php echo $p->siape ?></td>
                                    <td><?php echo $p->telefone ?></td>
                                    <td><?php echo $p->celular ?></td>
                                    <?php
                                                    //Buscar o perfil da pessoa
                                    $pe = $ppCtrl->buscarPerfilDaPessoa($p->idPessoa);
                                    $perfPess = $pe->fetch(PDO::FETCH_OBJ);
                                    $idPerf = $perfPess->idPerfil;
                                    $perf = $perCtrl->buscarPerfil($idPerf);
                                    $per = $perf->fetch(PDO::FETCH_OBJ);
                                    ?>
                                    <td><?php echo $per->perfil ?></td>
                                    <td><a href="editarPessoa.php?idPessoa=<?php echo $p->idPessoa ?>" class="btn btn-danger btn-sm">Alterar</a></td>
                                    <td><a href="listarAssociacao.php?membro=<?php echo $p->idPessoa ?>" class="btn btn-warning btn-sm">Comissões</a></td>
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