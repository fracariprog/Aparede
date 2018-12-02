<div class="card mt-4" >
            <!--<img class="card-img-top" src="#" alt="foto do projeto">-->
    <div class="card-body">
        <h5 class="card-title"><?= $project['project_details']['nome'] ?></h5>
        
        <p class="card-text text-justify"><?= $project['project_details']['resumo'] ?></p>


       <p  class="card-text"> Data de Cadastro: <?=date('d/m/Y',strtotime($project['project_details']['data_cadastro'])) ?></p>
       <p  class="card-text"> Data de Exposição: <?=date('d/m/Y',strtotime($project['project_details']['data_exposicao'])) ?></p>

       <?php 
       		for($i = 0; $i < count($project['image']); $i ++){
       ?>
       <img src="data:image/jpg;base64,<?= base64_encode($project['image'][$i]['imagem']); ?> "
            class='img-fluid' alt="">


        <?php
        if($i==0){
        echo "<p>A imagem acima é o rascunho do projeto.</p>";

          }

                  echo  "<br><br><br>";

        	}
        ?>

        <?php #echo(base64_encode($project['image']['imagem'])); ?> 
    </div>
</div>
