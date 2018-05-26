<?php

namespace gql\objectTypes\rocketTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class HeightType
 * @package gql\objectTypes\RocketTypes
 */
class HeightType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketHeight',
            'description'   => 'Info about rocket height.',
            'fields'        => [
                'meters'        => Type::float(),
                'feet'          => Type::float()
            ]
        ];

        parent::__construct($config);
    }

}