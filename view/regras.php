<?php
require "../controllers/ControllerRegras.php";
$controller = new ControllerRegras();
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
        <h2> Regras do projeto </h2>
        </div>
        <div class="container mt-3 text-justify">

            <blockquote class="blockquote" >
<p>Todos os alunos do IFSUL Câmpus Sapiranga podem se inscrever no Projeto, desde que formem um grupo/equipe de 02 a 04 alunos reunidos numa mesma ideia e proposta de trabalho; </p>
<p>As inscrições acontecem apenas pelo site e todas as etapas de inscrição devem ser preenchidas;</p>
<p>Cada equipe inscrita de antemão deverá  atentar para os prazos e determinar internamente as funções de cada integrante no trabalho da Parede;</p>
<p>O valor da inscrição será de R$ 5,00 por equipe com a finalidade de prover o projeto com materiais ao longo do ano de 2019;</p>
<p>A equipe deve ater-se aos limites da Parede estipulada (fundos da parede da sala de professores);</p>
<p>Cada proposta deverá usar apenas materiais disponibilizados pelo projeto às equipes (giz de quadro branco). 
<p>As equipes se responsabilizam em usar de forma correta e apropriada os equipamentos e materiais disponibilizados pelo projeto e que as propostas não violem normas e  direitos humanos;</p>
<p>O projeto selecionado deverá ocupar a parede no período de  09 dias, sendo: 03 dias para execução do projeto, 04 dias para exposição e registro fotográfico e 01 dia para desmontagem;</p>
<p>As montagens iniciam sempre nas 2ªs feiras;</p>
<p>As equipes devem contar que as intempéries (chuvas, vento e sol) que podem acontecer a qualquer momento, mas como nosso intuito é a efemeridade e o não preciosismo estético contamos com a transitoriedade;</p>
<p>Cada equipe deverá disponibilizar os registros fotográficos das intervenções atentando para todos os momentos da montagem, exposição, desmontagem, apagamento. Este material será reunido e formará um arquivo de imagens para um futuro catálogo visível no site;</p>
<p>As equipes devem responsabilizar-se pela limpeza da parede e do local adjacente a cada intervenção após o período de exposição. Se necessário, arcando com multa em caso de não cumprimento da limpeza;</p>
<p>Em caso de desistência, a equipe deverá comunicar com antecedência de 05 dias antes do início dos trabalhos, através do e-mail contatoaparedeifsul@gmail.com,  os motivos pelos quais desistiram. </p>

<p>* Levando em conta que, poderemos estar em momentos de aula no Campus,cada equipe enquanto realiza sua intervenção, deve respeitar tal fato.</p>









            </blockquote>
            <div class="container text-center">
                <h4 class="mb-3">Coordenação do Projeto: Vânia Sommermeyer</h4>
            </div>
        </div>
        <br><br>
        <?php
            foreach ($controller->getScripts() as $script) {
                echo $script;
            }
            
        ?>

    </body>
</html>