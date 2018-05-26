<?php

namespace gql\handlers;


use gql\Config;
use gql\exceptions\ApiException;
use gql\exceptions\ExceptionMessages;
use gql\Schema;
use GraphQL\Error\InvariantViolation;
use GraphQL\Server\Helper;
use GraphQL\Server\RequestError;
use GraphQL\Server\ServerConfig;
use GraphQL\Server\StandardServer;

/**
 * Class QueryHandler
 * @package gql\QueryHandler
 */
class QueryHandler
{
    /**
     * @param \gql\handlers\ResponseHandler $responseHandler
     * @param                               $requestData
     * @return \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[]|\GraphQL\Executor\Promise\Promise
     * @throws \gql\exceptions\ApiException
     */
    public function runQueryWithServer(ResponseHandler $responseHandler, $requestData){
        $parsedBody = $this->parseHttpRequest($responseHandler, $requestData);
        $config = $this->prepareConfig();
        return $this->executeRequest($config, $parsedBody);
    }

    /**
     * @return ServerConfig
     */
    private function prepareConfig(){
        $config = ServerConfig::create()
            ->setQueryBatching(true)
            ->setSchema(new Schema())
            ->setDebug(Config::DEBUG);

        return $config;
    }

    /**
     * @param \gql\handlers\ResponseHandler $responseHandler
     * @param array                                 $requestData
     * @return \GraphQL\Server\OperationParams|\GraphQL\Server\OperationParams[]
     */
    private function parseHttpRequest(ResponseHandler $responseHandler, Array $requestData){
        $helper = new Helper();

        try{
            $parsedBody = $helper->parseHttpRequest(function() use ($requestData){
                return json_encode($requestData);
            });
        }catch(RequestError $e){
            $responseHandler->sendExceptionInJSON(new ApiException(ExceptionMessages::serverError($e->getMessage())));
        }

        return $parsedBody;
    }

    /**
     * @param \GraphQL\Server\ServerConfig $config
     * @param                              $parsedBody
     * @return \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\ExecutionResult[]|\GraphQL\Executor\Promise\Promise
     * @throws \gql\exceptions\ApiException
     */
    private function executeRequest(ServerConfig $config, $parsedBody){

        $server = new StandardServer($config);

        try{
            $result = $server->executeRequest($parsedBody);
        }catch(InvariantViolation $e){
            if(Config::DEBUG){
                throw new ApiException(new ExceptionMessages($e->getMessage(), $e->getCode()));
            }else{
                throw new ApiException(ExceptionMessages::serverError());
            }
        }

        return $result;
    }
}