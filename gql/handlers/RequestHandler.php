<?php

namespace gql\handlers;

use gql\exceptions\ApiException;
use gql\exceptions\ExceptionMessages;
use gql\handlers\ResponseHandler;

/**
 * Class RequestHandler
 * @package gql\handlers
 */
class RequestHandler
{

    private $responseHandler;
    private $queryHandler;

    /**
     * RequestHandler constructor.
     * @param \gql\handlers\ResponseHandler $responseHandler
     * @param \gql\handlers\QueryHandler                      $queryHandler
     */
    public function __construct(ResponseHandler $responseHandler, QueryHandler $queryHandler)
    {
        $this->responseHandler = $responseHandler;
        $this->queryHandler = $queryHandler;
    }

    /**
     * @param $headers
     * @throws \gql\exceptions\ApiException
     */
    public function validateHeaders($headers){
        if((strpos(strtolower($headers['content-type']), 'application/json') !== false) && (strpos(strtolower($headers['content-type']),'text/plain') !== false) ){

            throw new ApiException(ExceptionMessages::contentTypeError());
        }
    }

    /**
     * @return array
     */
    public function retrieveHeaders(){
        return array_change_key_case( getallheaders(), CASE_LOWER );;
    }

    /**
     * @param $requestBody
     * @return \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[]|\GraphQL\Executor\Promise\Promise
     * @throws \gql\exceptions\ApiException
     */
    public function handleRequest($requestBody){
        if($this->hasErrorInRequest($requestBody)){
            return $requestBody;
        }

        if ($this->hasMissingQueryKey($requestBody)){
            throw new ApiException(ExceptionMessages::missingQuery());
        }

        return $this->queryHandler->runQueryWithServer($this->responseHandler, $requestBody);
    }

    /**
     * @param $headers
     * @return mixed
     * @throws \gql\exceptions\ApiException
     */
    public function retrieveHttpRequestBody($headers){
        if(!$this->hasJsonHeader($headers)){
            throw new ApiException(ExceptionMessages::contentTypeError());
        }

        $requestBody = json_decode(file_get_contents('php://input'), true);

        if($this->hasInvalidRequestBody($requestBody)){
            throw new ApiException(ExceptionMessages::invalidRequestBody($requestBody));
        }

        return $requestBody;
    }

    /**
     * @param $headers
     * @return bool
     */
    private function hasJsonHeader($headers){
        return strtolower($headers['content-type']) === 'application/json';
    }

    /**
     * @param $requestData
     * @return bool
     */
    private function hasInvalidRequestBody($requestData){

        if(!is_array($requestData)){
            return true;
        }

        if(in_array('query', $requestData, true)){
            return false;
        }

        return false;
    }

    /**
     * @param $requestBody
     * @return bool
     */
    private function hasErrorInRequest($requestBody){
        return isset($requestBody['error']) && $requestBody['error'] === true;
    }

    /**
     * @param $requestBody
     * @return bool
     */
    private function hasMissingQueryKey($requestBody){
        return (bool)array_intersect(['query'], array_keys($requestBody)) === false;
    }
}