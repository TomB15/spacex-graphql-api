<?php


namespace gql\objectTypes\launchTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class FirstStageType
 * @package gql\objectTypes
 */
class FirstStageType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'FirstStage',
            'description'   => 'Data about first stage of rocket',
            'fields'        => [
                'cores' => Type::listOf(ObjectTypesRegistry::queryTypes()->launchTypes()->core())
            ]
        ];

        parent::__construct($config);
    }


}