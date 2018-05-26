<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class CapsuleDetailType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleDetail',
          'description' => 'Get detailed information about a capsule.',
          'fields'      => [
              'capsule_serial'  => Type::string(),
              'capsule_id'      => Type::string(),
              'status'          => Type::string(),
              'original_launch' => Type::string(),
              'missions'        => Type::listOf(Type::string()),
              'landings'        => Type::int(),
              'type'            => Type::string(),
              'details'         => Type::string(),
          ]
        ];

        parent::__construct($config);
    }
}