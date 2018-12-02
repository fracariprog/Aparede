<?php

$id = filter_input(INPUT_POST, 'projeto_id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome_do_projeto', FILTER_SANITIZE_SPECIAL_CHARS);
$resumo = filter_input(INPUT_POST, 'resumo_do_projeto', FILTER_SANITIZE_SPECIAL_CHARS);

require "../../model/Connection.php";
$connection = new Connection();

$connection->updateProjInfo($id, $nome, $resumo);

header('Location: ../../view/administracao.php');	