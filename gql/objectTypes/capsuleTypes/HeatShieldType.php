<?php

namespace gql\objectTypes\capsuleTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class HeatShieldType
 * @package gql\objectTypes\capsuleTypes
 */
class HeatShieldType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleHeatShield',
          'description' => 'Get information about a capsule\'s heat shield.',
          'fields'      => [
              'material'        => Type::string(),
              'size_meters'     => Type::float(),
              'temp_degrees'    => Type::float(),
              'dev_partner'     => Type::string(),
          ]
        ];

        parent::__construct($config);
    }
}