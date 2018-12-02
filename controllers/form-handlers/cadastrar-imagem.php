<?php 

$projectId = $_POST['id'];

$imagem = file_get_contents($_FILES['imagem']['tmp_name']);
require "../../model/Connection.php";
$connection = new Connection();

$connection->insertImageOnProject($projectId, $imagem);
$connection->closeConnection();
header("location: ../../view/administracao.php");
