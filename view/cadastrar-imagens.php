<?php
require "../controllers/ControllerCadastroImagem.php";
$controller = new ControllerCadastroImagem();


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
        <div class="container mt-3">
            <?php 
                $projectId = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
                $project = $controller->getAllInfoFromProjectId($projectId); 
                // var_dump($project);
                require "./modulos/adicionar-imagem.php";
            ?>

            
        </div>
        
        <?php
            foreach ($controller->getScripts() as $script) {
                echo $script;
            }
            $controller->closeConnection();
        ?>
    </body>
</html>