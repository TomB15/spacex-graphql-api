<?php

namespace gql\objectTypes\capsuleTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class MassType
 * @package gql\objectTypes
 */
class MassType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsulePayloadMass',
          'description' => 'Information about payload mass.',
          'fields'      => [
              'kg' => Type::float(),
              'lb' => Type::float(),
          ]
        ];

        parent::__construct($config);
    }
}