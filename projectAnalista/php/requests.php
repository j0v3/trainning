<?php

include "config.php";

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
    $semente->bindParam(':feito', $feito);
    $semente->execute();
}
;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    requiGET($lod = $dbd);

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        
        $data = json_decode(file_get_contents("php://input"),true);
        requiPOST($titulo=$data['titulo'], $feito=$data['feito'], $dbd);

        http_response_code(201);
        echo json_encode(["sucesso" => true,"mensagem"=>"criado com sucesso"]);

    } catch (PDOException $e) {
       http_response_code(500); 
       echo json_encode(["erro" => "Falha na base de dados: " . $e->getMessage()]);
    };

}else{
    http_response_code(405); 
    echo json_encode(["erro" => "Metodo nao permitido."]);
};

?>