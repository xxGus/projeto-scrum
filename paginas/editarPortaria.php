<?php
   require_once "header.php";
   require_once '../control/PortariaCtrl.php';

   $pCtrl = new PortariaCtrl();
   $portaria = $_GET['idPortaria'];
   $p = $pCtrl->buscarPortaria($portaria);
   $portaria = $p->fetch(PDO::FETCH_OBJ);
?>

<article id="registre-se">
   <aside class="container-fluid">
       <div class="col-lg-8 mx-auto">
           <h3 class="page-header">Editar Pessoa</h3>
           <form enctype="multipart/form-data" action="../intermediadoras/intermediadorPortaria.php" method="post">
               <input type="hidden" name="portaria-submit" value="Alterar"/>
               <input type="hidden" class="form-control" id="idPortaria" name="idPortaria" value="<?php echo $portaria->id; ?>">
               <!-- area de campos do form -->
               <div class="form-group col-md-12">
                 <label for="numero">N°:</label>
                 <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $portaria->id ?>" required>
               </div>
               <div class="form-group col-md-12">
                 <label for="anexo">Anexar arquivo:</label>
                 <input type="file" class="form-control" id="anexo" name="arquivo" value="<?php echo $portaria->link_anexo ?>">
               </div>
               <div class="form-group col-md-3">
                 <label for="data">Data:</label>
                 <input type="date" class="form-control" id="data" value="<?php echo $portaria->data ?>" name="data">
               </div>
               <div class="form-group col-md-2">
                 <label for="assunto">Assunto:</label>
                 <textarea type="text" class="form-control" id="assunto" name="assunto"><?php echo $portaria->assunto ?></textarea>
               </div>
               <div class="form-group col-md-5">
                 <label for="objetivo">Objetivo:</label>
                 <textarea type="text" class="form-control" id="objetivo" name="objetivo"><?php echo $portaria->objetivo ?></textarea>
               </div>
               <div class="setor-artigos">
                  <div class="lista-artigos">
                     <?php $artigos = explode("\qr/", $portaria->artigos) ;
                     $numArtigos = 0;
                     foreach ($artigos as $key => $artigo): $numArtigos++; ?>
                           <div class="form-group col-md-3 campo-artigos" data-num-artigo="<?php echo $numArtigos ?>">
                             <label for="artigo">Artigo <?php echo $numArtigos ?>°:</label>
                             <textarea type="text" class="form-control" id="artigo" name="artigos[]"><?php echo $artigo ?></textarea>
                           </div>
                     <?php endforeach; ?>
                  </div>

                  <button type="button" class="btn btn-success adicionar-artigo">+</button>
                  <button type="button" class="btn btn-success remover-artigo">-</button>
               </div>

               <div class="form-group col-md-3">
                 <label for="diretor">Diretor Geral:</label>
                 <input type="text" class="form-control" id="diretor" value="<?php echo $portaria->diretor ?>" name="diretor">
               </div>
               <div class="row">
                   <div class="form-group col-md-7">
                       <input type="submit" class="btn btn-success" id="alterar" value="Alterar"/>
                   </div>
               </div>
               <div class="alerta-cadastro alert alert-dismissible fade show" data-dismiss="alert" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
           </form>
       </div>
   </aside>
</article>
<?php
require_once "footer.php";
