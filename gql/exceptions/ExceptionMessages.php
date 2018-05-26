<?php


namespace gql\exceptions;

/**
 * Contains error messages produced by api
 * Class ExceptionMessages
 * @package gql\exceptions
 */
class ExceptionMessages
{
    /**
     * @var int
     */
    public $code;
    /**
     * @var string
     */
    public $message;

    /**
     * @var null|\Throwable
     */
    public $previous;

    /**
     * ExceptionMessages constructor.
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $code = 400, \Throwable $previous = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->previous = $previous;
    }

    /**
     * @param null $previous
     * @return \gql\exceptions\ExceptionMessages
     */
    public static function contentTypeError($previous = null){

        $headers = array_change_key_case( getallheaders(), CASE_LOWER );

        $code = 406;
        $message = 'Invalid content type. Got: ' . ( (isset($headers['content-type']) ? $headers['content-type'] : 'none' ) .
            '. Expected application/json');

        return new self($message, $code, $previous);
    }

    /**
     * @param      $errorMessage
     * @param null $previous
     * @return \gql\exceptions\ExceptionMessages
     */
    public static function serverError($errorMessage = '', $previous = null){

        $code = 500;
        $message = 'Internal Server Error ' . $errorMessage;

        return new self($message, $code, $previous);
    }

    /**
     * @param null $previous
     * @return \gql\exceptions\ExceptionMessages
     */
    public static function missingQuery($previous = null){

        $code = 422;
        $message = 'Request is missing query';

        return new self($message, $code, $previous);
    }

    /**
     * @param      $function
     * @param      $invalidArgument
     * @param null $previous
     * @return \gql\exceptions\ExceptionMessages
     */
    public static function invalidArgument($function, $invalidArgument, $previous = null){

        $code = 400;
        $message = 'Provided invalid argument at ' . $function. '. Got ' . $invalidArgument;

        return new self($message, $code, $previous);
    }

    /**
     * @param      $requestBody
     * @param null $previous
     * @return \gql\exceptions\ExceptionMessages
     */
    public static function invalidRequestBody($requestBody, $previous = null){

        $code = 400;
        $message = 'Expected JSON in following format { query : "query{ ... }". Got: ' . $requestBody;

        return new self($message, $code, $previous);
    }
}

