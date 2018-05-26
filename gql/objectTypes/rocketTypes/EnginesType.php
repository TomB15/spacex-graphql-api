<?php

namespace gql\objectTypes\rocketTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class EnginesType
 * @package gql\objectTypes\RocketTypes
 */
class EnginesType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketEngine',
            'description'   => 'Info about rocket\'s engine.',
            'fields'        => [
                'number'            => Type::int(),
                'type'              => Type::string(),
                'version'           => Type::string(),
                'layout'            => Type::string(),
                'engine_loss_max'   => Type::float(),
                'propellant_1'      => Type::string(),
                'propellant_2'      => Type::string(),
                'thrust_sea_level'  => ObjectTypesRegistry::queryTypes()->rocketTypes()->thrust(),
                'thrust_vacuum'     => ObjectTypesRegistry::queryTypes()->rocketTypes()->thrust(),
                'thrust_to_weight'  => Type::float(),
            ]
        ];

        parent::__construct($config);
    }

}