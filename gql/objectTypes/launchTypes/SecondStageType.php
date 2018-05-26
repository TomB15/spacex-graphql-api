<?php


namespace gql\objectTypes\launchTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class SecondStageType
 * @package gql\objectTypes
 */
class SecondStageType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'SecondStage',
            'description'   => 'Data about second stage of a rocket.',
            'fields'        => [
                'payloads'  => Type::listOf(ObjectTypesRegistry::queryTypes()->launchTypes()->payload())
            ]
        ];

        parent::__construct($config);
    }

}