<?php


namespace gql\exceptions;


use GraphQL\Error\ClientAware;

/**
 * Defines exceptions for gql-php library.
 *
 * Class GraphqlException
 * @package gql\exceptions
 */
class GraphqlException extends \Exception implements ClientAware {

    private $isSafe;
    private $category;

    /**
     * GraphqlException constructor.
     * @param \gql\exceptions\ExceptionMessages $msg
     * @param bool                              $isSafe
     * @param string                            $category
     */
    public function __construct(ExceptionMessages $msg, $isSafe = false, $category = 'gql') {
        parent::__construct($msg->message, $msg->code, $msg->previous);
    }

    /**
     * Returns true when exception message is safe to be displayed to a client.
     *
     * @api
     * @return bool
     */
    public function isClientSafe()
    {
        return $this->isSafe;
    }

    /**
     * Returns string describing a category of the error.
     *
     * Value "gql" is reserved for errors produced by query parsing or
     * validation, do not use it.
     *
     * @api
     * @return string
     */
    public function getCategory()
    {
       return $this->category;
    }
}