<?php

require_once "config.php";

$stmt = $dbd->query("SELECT id, titulo, feito, criado_em FROM todo ORDER BY criado_em DESC");
$tarefas = $stmt->fetchAll();

echo json_encode($tarefas);

//print_r($tarefas);

?>