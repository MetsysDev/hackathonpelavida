<?php

date_default_timezone_set("America/Sao_Paulo");
function send($statusCode = 200, $data = null, $message = null, $tag = null)
{
    $statusTexts = array(
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
    );
    $params = [];
    if (is_array($data)) {
        $params = $data;
    }
    if ($message) {
        $params["message"] = $message;
    }
    if ($tag) {
        $params["tag"] = $tag;
    }

    header("HTTP/1.1 $statusCode $statusTexts[$statusCode]");
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Content-Type: application/json');

    if (count($params)) {
        echo json_encode($params);
    }
    die;
}

function getContents($paramentro = false)
{
    $contents = null;

    switch (strtolower($_SERVER['REQUEST_METHOD'])) {
        case 'delete':
        case 'get':
            $contents = $_GET;
            break;

        case 'post':
        case 'put':
            $contents = $_POST;
            if (!is_array($contents) || count($contents) <= 0) {
                parse_str(file_get_contents("php://input"), $contents);
            }
            break;
    }

    if ($contents && is_array($contents) && count($contents) > 0) {
        if ($paramentro && strlen($paramentro) > 0) {
            if (isset($contents[$paramentro])) {
                return $contents[$paramentro];
            } else {
                return false;
            }
        }
        return $contents;
    }
    return false;
}

function validarId($ArrayOuVariavel, $key = null)
{
    if (
        is_array($ArrayOuVariavel) &&
        $key &&
        isset($ArrayOuVariavel[$key]) &&
        is_numeric($ArrayOuVariavel[$key]) &&
        (int)$ArrayOuVariavel[$key] > 0
    ) {
        return true;
    } else if (is_numeric($ArrayOuVariavel) && (int)$ArrayOuVariavel > 0){
        return true;
    }

    return false;
}

function existeValor($ArrayOuVariavel, $key = null)
{
    if (
        is_array($ArrayOuVariavel) &&
        $key &&
        isset($ArrayOuVariavel[$key]) &&
        $ArrayOuVariavel[$key] &&
        strlen((string)$ArrayOuVariavel[$key]) > 0
    ) {
        return true;
    } else if (
            !is_array($ArrayOuVariavel) &&
            $ArrayOuVariavel && 
            strlen((string)$ArrayOuVariavel) > 0
        ){
        return true;
    }

    return false;
}

function existeCampoEValor($camposObrigatorios, $dadosValidar)
{
    $camposInvalidos = [];

    foreach ($camposObrigatorios as $campo) {
        if (
            !validarId($dadosValidar, $campo) && 
            !existeValor($dadosValidar, $campo)) {
            $camposInvalidos[] = $campo;
        }
    }

    if (count($camposInvalidos)) {
        $camposInvalidos = 'Campos obrigatórios: ' . implode(", ", $camposInvalidos);
        send(400, null, $camposInvalidos);
    }

    return true;
}
function formataDataUtcParaDatetime($dataUtc, $timezone = 'America/Sao_Paulo', $toFormat = 'd/m/Y H:i:s', $fromFormat = 'Y-m-d H:i:s')
{
    if ($dataUtc && is_numeric($dataUtc) && (int)$dataUtc > 0) { //TIMESTAMP
        $data = DateTime::createFromFormat('U', $dataUtc, new DateTimeZone('UTC'));
    } elseif ($dataUtc && is_string($dataUtc) && strlen($dataUtc) > 0) {
        $data = DateTime::createFromFormat($fromFormat, $dataUtc, new DateTimeZone('America/Sao_Paulo'));
    } elseif ($dataUtc instanceof DateTime) {
        $data = $dataUtc;
    } else {
        $data = false;
    }
    print_r($data);
    if ($data) {
        $data->setTimeZone(new DateTimeZone($timezone));
        if ($toFormat) {
            return $data->format($toFormat);
        } else {
            return $data;
        }
    }
    return false;
}