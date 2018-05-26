<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class DetailedCoreType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CoreDetailed',
          'description' => 'Get detailed information about a core.',
          'fields'      => [
              'core_serial'         => Type::string(),
              'block'               => Type::int(),
              'status'              => Type::string(),
              'original_launch'     => Type::string(),
              'missions'            => Type::listOf(Type::string()),
              'vehicles_launched'   => Type::listOf(Type::string()),
              'rtls_attempt'        => Type::boolean(),
              'rtls_landings'       => Type::int(),
              'asds_attempt'        => Type::boolean(),
              'asds_landings'       => Type::int(),
              'water_landing'       => Type::boolean(),
              'details'             => Type::string(),
          ]
        ];

        parent::__construct($config);
    }
}