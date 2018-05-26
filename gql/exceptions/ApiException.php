<?php

namespace gql\exceptions;

/**
 * Class AuthorizationException
 * @package gql\exceptions
 */
class ApiException extends \Exception {

    /**
     * ApiException constructor.
     * @param \gql\exceptions\ExceptionMessages $msg
     */
    public function __construct(ExceptionMessages $msg) {
        parent::__construct($msg->message, $msg->code, $msg->previous);
    }
}