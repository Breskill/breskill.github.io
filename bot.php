<?php
$token = '7972818397:AAGhXehcGVFCGruGCroFF0HCO-o0xqLxhTs';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, true);

if(isset($update['message'])) {
    $chatId = $update['message']['chat']['id'];
    $message = $update['message']['text'];

    switch($message) {
        case '/start':
            $response = 'Iniciando';
            sendMessage($chatId, $response);
            break;
        case 'como me ira en la sumativa':
            $response = 'Te ira bien';
            sendMessage($chatId, $response);
            break;
        default:
            $response = 'No te he entendido';
            sendMessage($chatId, $response);
            break;
    }
}

function sendMessage($chatId, $response){
    global $website;
    $url = $website . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($response);
    file_get_contents($url);
}
?>
