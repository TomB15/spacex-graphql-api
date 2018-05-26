<?php

namespace gql\objectTypes\capsuleTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class CargoType
 * @package gql\objectTypes
 */
class CargoType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleCargo',
          'description' => 'Get information about cargo in trunk.',
          'fields'      => [
              'solar_array'         => Type::int(),
              'unpressurized_cargo' => Type::boolean()
              ]
        ];

        parent::__construct($config);
    }
}