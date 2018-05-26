<?php


namespace gql\objectTypes\launchTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class RocketType
 * @package gql\objectTypes
 */
class RocketType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'LaunchedRocket',
            'description'   => 'Data about rocket.',
            'fields'        => [
                'rocket_id'      => Type::string(),
                'rocket_name'    => Type::string(),
                'rocket_type'    => Type::string(),
                'first_stage'    => ObjectTypesRegistry::queryTypes()->launchTypes()->firstStage(),
                'second_stage'   => ObjectTypesRegistry::queryTypes()->launchTypes()->secondStage(),
            ]
        ];

        parent::__construct($config);
    }

}