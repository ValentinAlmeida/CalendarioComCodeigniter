<?php

$mensagem = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_STRING);

if($mensagem){

    require_once('vendor/autoload.php');


//echo \app\ApiController::getChatId(TOKEN);


    if(!\app\ApiController::sendMessage($mensagem)){
        jsonResponse('Não foi possivel enviar, houve um erro interno.', -1, 500);
    }

    jsonResponse('Mensagem enviada.', 1, 200);

}else{

    jsonResponse('Mensagem não encontrada', -1, 404);

}

function jsonResponse(string $mensagem, int $result, int $httpCode = 200){

    http_response_code($httpCode);

    header('Content-type: application/json');

    echo json_encode([
        'msg' => $mensagem,
        'result' => $result
    ]);
}

