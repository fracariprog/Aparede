<?php
require "../controllers/ControllerFolder.php";
$controller = new ControllerFolder();
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

        <div class="container mt-3 col-md-12 text-center">
        <h2 class="mb-3"> Folder do projeto</h2>

            
            <img class="img-fluid col-md-3 " src="../raw/f1.png" height="220" />

            <img class="img-fluid col-md-3" src="../raw/f2.png" height="220" />

            <img class="img-fluid col-md-3" src="../raw/f3.png" height="220" />

  
            <blockquote class="blockquote" >
            

            </blockquote>
            
        </div>
        <div class="container text-center">
            <h4 class="mb-3">Autores:</h4>
            <p>Guilherme Gabriel Rigotti</p>
            <p>Lucas Eduardo Backes</p>
            <p>Andrews Patrick</p>
            <p>Leonardo Walbrinch</p>

        </div>

        <br><br>
        <?php
            foreach ($controller->getScripts() as $script) {
                echo $script;
            }
            
        ?>

    </body>
</html>