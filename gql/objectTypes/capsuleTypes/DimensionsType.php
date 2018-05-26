<?php

namespace gql\objectTypes\capsuleTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class DimensionsType
 * @package gql\objectTypes
 */
class DimensionsType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleDimensions',
          'description' => 'Get information in meters and feet.',
          'fields'      => [
              'meters'      => Type::float(),
              'feet'        => Type::float(),
          ]
        ];

        parent::__construct($config);
    }
}