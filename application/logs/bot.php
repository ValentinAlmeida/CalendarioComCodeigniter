<?php
$token=5163302255:AAFi6vTDzf8SHycI-2WjPRgrwwndpeDDZ7o;
$grupo=2028906841;

    $parametros['chat_id']=$grupo;
$parametros['text']='MENSAGEM PARA SER ENVIADA';
// PARA ACEITAR TAGS HTML
$parametros['parse_mode']='html';
// PARA NÃO MOSTRAR O PREVIW DE UM LINK
$parametros['disable_web_page_preview']=true;

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => json_encode($parametros),
        'header'=>  "Content-Type: application/json\r\n" .
            "Accept: application/json\r\n"
    )
);

$context  = stream_context_create( $options );
file_get_contents('https://api.telegram.org/telegram'.$token.'/sendMessage', false, $context );