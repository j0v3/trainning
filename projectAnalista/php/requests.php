<?php

require_once "config.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

function requiGET($lod)
{

    $stmt = $lod->query("SELECT id, titulo, feito, criado_em FROM todo ORDER BY criado_em DESC;");
    $tarefas = $stmt->fetchAll();

    echo json_encode($tarefas);

}
;

function requiPOST($titulo, $feito, $lod)
{

    $semente = $lod->prepare("INSERT INTO todo (titulo, feito) VALUES (:titulo, :feito);");
    $semente->bindParam(':titulo', $titulo);

    switch ($feito) {
        case "0":
            $feito = 0;
        case "1":
            $feito = 1;
        default:
            $feito = 0;

    }

    $semente->bindParam(':feito', $feito);
    $semente->execute();
}
;

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    requiGET($lod = $dbh);

} elseif($_SERVER['REQUEST_METHOD'] === 'POST'){ 

    try{

       requiPOST($titulo, $feito, $lod);

    }
    catch(PDOException $e){echo $e;};

};

requiPOST('teste2', 0, $dbd);

?>