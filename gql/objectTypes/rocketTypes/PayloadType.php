<?php

namespace gql\objectTypes\rocketTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class PayloadType
 * @package gql\objectTypes\RocketTypes
 */
class PayloadType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketPayload',
            'description'   => 'Info about rocket\'s payload.',
            'fields'        => [
                'option_1'          => Type::string(),
                'composite_fairing' => ObjectTypesRegistry::queryTypes()->rocketTypes()->compositeFairing()
            ]
        ];

        parent::__construct($config);
    }

}