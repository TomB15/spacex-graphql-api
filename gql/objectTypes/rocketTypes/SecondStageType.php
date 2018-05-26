<?php

namespace gql\objectTypes\rocketTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class SecondStageType
 * @package gql\objectTypes\RocketTypes
 */
class SecondStageType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketSecondStage',
            'description'   => 'Info about rocket\' second stage.',
            'fields'        => [
                'engines'           => Type::int(),
                'fuel_amount_tons'  => Type::float(),
                'burn_time_sec'     => Type::float(),
                'thrust'            => ObjectTypesRegistry::queryTypes()->rocketTypes()->thrust(),
                'payloads'          => ObjectTypesRegistry::queryTypes()->rocketTypes()->payload()
            ]
        ];

        parent::__construct($config);
    }

}