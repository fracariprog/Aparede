<?php 
$id = $_POST['id'];
?>
<h3 class="mb-3">Cadastrar Imagens Projeto Concluído</h3>
    
    
   
   
     <form action="../controllers/form-handlers/cadastrar-imagem.php" method="POST" enctype="multipart/form-data">
   
    <input type="hidden" name="id" value="<?= $id?>"/>
   
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" ><strong>Nova Imagem</strong></label>
        
        <div class="col-sm-8 ">
            <input type="file"  class="form-control " name="imagem" required>
        </div>
        
    
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
        </div> 
    </div>
</form>
