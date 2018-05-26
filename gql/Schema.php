<?php


namespace gql;

/**
 * Class Schema
 * @package gql
 */
class Schema extends \GraphQL\Type\Schema
{

    /**
     * Schema constructor.
     */
    public function __construct()
    {
        $config = [
            'query' => ObjectTypesRegistry::query()
        ];

        parent::__construct($config);
    }
}