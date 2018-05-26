<?php

namespace gql\objectTypes\capsuleTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class ThrustType
 * @package gql\objectTypes\capsuleTypes
 */
class ThrustType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'CapsuleThrust',
            'description'   => 'Info about capsule\'s thrust.',
            'fields'        => [
                'kN'    => Type::float(),
                'lbf'   => Type::float()
            ]
        ];

        parent::__construct($config);
    }

}