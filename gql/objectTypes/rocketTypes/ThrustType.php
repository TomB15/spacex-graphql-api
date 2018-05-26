<?php

namespace gql\objectTypes\rocketTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class ThrustType
 * @package gql\objectTypes\RocketTypes
 */
class ThrustType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketThrust',
            'description'   => 'Info about rocket\'s thrust.',
            'fields'        => [
                'kN'    => Type::float(),
                'lbf'   => Type::float()
            ]
        ];

        parent::__construct($config);
    }

}