<?php

namespace gql\objectTypes\rocketTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;

/**
 * Class CompositeFairingType
 * @package gql\objectTypes\RocketTypes
 */
class CompositeFairingType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketCompositeFairing',
            'description'   => 'Info about payload\'s composite fairing.',
            'fields'        => [
                'height'        => ObjectTypesRegistry::queryTypes()->rocketTypes()->height(),
                'diameter'      => ObjectTypesRegistry::queryTypes()->rocketTypes()->diameter()
            ]
        ];

        parent::__construct($config);
    }

}