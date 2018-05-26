<?php

namespace gql\objectTypes\rocketTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class MassType
 * @package gql\objectTypes\RocketTypes
 */
class MassType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketMass',
            'description'   => 'Info about rocket\'s mass.',
            'fields'        => [
                'kg' => Type::float(),
                'lb' => Type::float()
            ]
        ];

        parent::__construct($config);
    }

}