<?php

namespace gql;

use gql\handlers\RequestHandler;
use gql\exceptions\ApiException;
use gql\handlers\QueryHandler;
use gql\handlers\ResponseHandler;

require_once __DIR__ . '/../vendor/autoload.php';

$queryHandler = new QueryHandler();
$responseHandler = new ResponseHandler();
$requestHandler = new RequestHandler($responseHandler, $queryHandler);

try {
    $headers = $requestHandler->retrieveHeaders();
    $requestHandler->validateHeaders($headers);
    $requestBody = $requestHandler->retrieveHttpRequestBody($headers);
    $response = $requestHandler->handleRequest($requestBody);
    $responseHandler->sendResponseInJSON($response);
} catch (ApiException $e) {
    $responseHandler->sendExceptionInJSON($e);
}