<?php

namespace gql\objectTypes\rocketTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class DiameterType
 * @package gql\objectTypes\RocketTypes
 */
class DiameterType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketDiameter',
            'description'   => 'Info about rocket diameter.',
            'fields'        => [
                'meters'        => Type::float(),
                'feet'          => Type::float()
            ]
        ];

        parent::__construct($config);
    }

}