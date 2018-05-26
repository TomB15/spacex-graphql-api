<?php

namespace gql\exceptions;

/**
 * Class ServerException
 * @package gql\exceptions
 */
class ServerException extends \Exception {

    /**
     * ServerException constructor.
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(
        $message = 'Server error has occurred',
        $code = 400,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}