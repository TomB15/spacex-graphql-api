<?php

namespace gql\objectTypes\rocketTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class LandingLegsType
 * @package gql\objectTypes\RocketTypes
 */
class LandingLegsType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketLandingLegs',
            'description'   => 'Info about landing legs.',
            'fields'        => [
                'number'        => Type::int(),
                'material'      => Type::string()
            ]
        ];

        parent::__construct($config);
    }

}