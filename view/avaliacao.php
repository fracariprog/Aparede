<?php
require "../controllers/ControllerAvaliacao.php";
$controller = new ControllerAvaliacao();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <title><?=$controller->getPageTitle()?></title>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>
        <?php
            require "./modulos/menu-navegacao.php";
                   
        ?>
        <div class="container mt-3 text-center">        
        <h2> Critérios de Avaliação - A Parede </h2>
        <div class="container mt-3 text-justify">

            

            <blockquote class="blockquote" >
            <p>Cada proposta será avaliada seguindo os seguintes critérios:</p>

            <p>&emsp;Correta inscrição respeitando as regras de ocupação (1,0)</p>

           <p>Envio de resumo contemplando: </p>
            <p>&emsp; Objetivo da proposta (2,0)</p>
            <p>&emsp; Clareza do tema (2,0)</p>

           <p> Envio de layout/rascunho com:</p>
            <p>&emsp;A forma gráfica de abordar o tema (3,0)</p>
            <p>&emsp;Resolução formal e espacial (2,0)</p>

            </blockquote>
            
        </div>
        <br><br>
        <?php
            foreach ($controller->getScripts() as $script) {
                echo $script;
            }
            
        ?>

    </body>
</html>