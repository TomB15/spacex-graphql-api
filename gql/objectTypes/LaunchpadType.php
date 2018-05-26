<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class LaunchpadType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'Launchpad',
          'description' => 'Get information about a launchpad.',
          'fields'      => [
              'id'                  => Type::string(),
              'full_name'           => Type::string(),
              'status'              => Type::string(),
              'location'            => ObjectTypesRegistry::queryTypes()->launchpadTypes()->location(),
              'vehicles_launched'   => Type::listOf(Type::string()),
              'details'             => Type::string(),
          ]
        ];

        parent::__construct($config);
    }
}