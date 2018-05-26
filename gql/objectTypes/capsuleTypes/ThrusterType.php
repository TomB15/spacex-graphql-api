<?php

namespace gql\objectTypes\capsuleTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class ThrusterType
 * @package gql\objectTypes\capsuleTypes
 */
class ThrusterType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleThruster',
          'description' => 'Get information about a capsule\'s heat shield.',
          'fields'      => [
              'type'        => Type::string(),
              'amount'      => Type::int(),
              'pods'        => Type::int(),
              'fuel_1'      => Type::string(),
              'fuel_2'      => Type::string(),
              'thrust'      => ObjectTypesRegistry::queryTypes()->capsuleTypes()->thrust(),
          ]
        ];

        parent::__construct($config);
    }
}