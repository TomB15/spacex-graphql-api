<?php

namespace gql\objectTypes\capsuleTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;

/**
 * Class TrunkType
 * @package gql\objectTypes
 */
class TrunkType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleTrunk',
          'description' => 'Get information about a capsule\'s trunk.',
          'fields'      => [
              'trunk_volume'    => ObjectTypesRegistry::queryTypes()->capsuleTypes()->volume(),
              'cargo'           => ObjectTypesRegistry::queryTypes()->capsuleTypes()->cargo()
          ]
        ];

        parent::__construct($config);
    }
}