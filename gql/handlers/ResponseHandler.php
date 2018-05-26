<?php

namespace gql\handlers;


/**
 * Class ResponseHandler
 * @package gql\handlers
 */
class ResponseHandler
{
    /**
     * @param $responseMessage
     */
    public function sendResponseInJSON($responseMessage){
        header('HTTPS/1.1. 200 OK');
        header('Content-Type: application/json');
        echo json_encode($responseMessage->jsonSerialize());

        exit();
    }

    /**
     * Sends response with exception
     * @param \Exception $e
     */
    public function sendExceptionInJSON(\Exception $e){
        $message = [
            'errors' => [
                'message' => $e->getMessage()
            ]
        ];

        http_response_code(200);
        header('Content-Type: application/json');
        echo(json_encode($message));

        exit();
    }
}
