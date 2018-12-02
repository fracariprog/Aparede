<?php

$id = filter_input(INPUT_POST, 'projeto_id', FILTER_SANITIZE_NUMBER_INT);
$estado= filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_SPECIAL_CHARS);
$data_exposicao= filter_input(INPUT_POST, 'data_exposicao', FILTER_SANITIZE_SPECIAL_CHARS);

require "../../model/Connection.php";
$connection = new Connection();

$connection->updateEstadoProj($id, $estado, $data_exposicao);

header('Location: ../../view/administracao.php');