<?php

namespace gql\objectTypes\capsuleTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;

/**
 * Class PressurizedCapsuleType
 * @package gql\objectTypes
 */
class PressurizedCapsuleType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'PressurizedCapsule',
          'description' => 'Get information about a capsule\'s pressurized capsule.',
          'fields'      => [
              'payload_volume' => ObjectTypesRegistry::queryTypes()->capsuleTypes()->volume(),
          ]
        ];

        parent::__construct($config);
    }
}