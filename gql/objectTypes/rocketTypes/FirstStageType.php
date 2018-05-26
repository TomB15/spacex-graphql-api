<?php

namespace gql\objectTypes\rocketTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class FirstStageType
 * @package gql\objectTypes\RocketTypes
 */
class FirstStageType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketFirstStage',
            'description'   => 'Info about rocket\'s first stage.',
            'fields'        => [
                'reusable'          => Type::boolean(),
                'engines'           => Type::int(),
                'fuel_amount_tons'  => Type::float(),
                'burn_time_sec'     => Type::float(),
                'thrust_sea_level'  => ObjectTypesRegistry::queryTypes()->rocketTypes()->thrust(),
                'thrust_vacuum'     => ObjectTypesRegistry::queryTypes()->rocketTypes()->thrust(),
            ]
        ];

        parent::__construct($config);
    }

}