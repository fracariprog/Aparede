<?php
require '../controllers/ControllerAdministracao.php';
$controller = new ControllerAdministracao();
?>

<html>
    <head>
        <title><?= $controller->getPageTitle() ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>

        <?php
        require './modulos/menu-navegacao.php';
        ?>
        <div class="container mt-3">
            <h2>Área Administrativa</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Situação</th>
                            <th>Lider</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//                        TODO consulta aos dados do banco
                        foreach($controller->getAllProjectsForTable() as $project) {
                        ?>
                        <tr>
                            <td><?= $project['nome_do_projeto']?></td>
                            <td>
                                <?php
                                    switch($project['situacao']){
                                        case PROJETOS_TIPO_PENDENTE:
                                            echo "Pendente";
                                            break;
                                        case PROJETOS_TIPO_CONCLUIDO:
                                            echo "Concluido";
                                            break;
                                        case PROJETOS_TIPO_REPROVADO:
                                            echo "Reprovado";
                                            break;
                                        case PROJETOS_TIPO_APROVADO:
                                            echo "Aprovado";

                                    }
                                ?>
                            </td>
                            <td><?= $project['lider']?></td>
                            <td>
                                <form action="../view/mudar-projeto.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $project['id'];?>">

                                    <button type="submit" class='btn btn-primary  btn-block' >Editar</button>
                                    
                                </form>

                                <form action="../view/cadastrar-imagens.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $project['id'];?>">
                                    <?php
                                    if($project['situacao']=="2")
                                    {
                                    echo "<button type='submit' class='btn btn-success  btn-block'>Cadastrar Imagens</button>";
  
                                    }

                                    ?>
                                </form>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    ?>
</html>
