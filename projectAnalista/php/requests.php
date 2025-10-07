<?php

require_once "config.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$stmt = $dbd->query("SELECT id, titulo, feito, criado_em FROM todo ORDER BY criado_em DESC;");
$tarefas = $stmt->fetchAll();

echo json_encode($tarefas);

print_r($_SERVER);

?>