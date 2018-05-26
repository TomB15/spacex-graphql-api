<?php

namespace gql\objectTypes\capsuleTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class VolumeType
 * @package gql\objectTypes
 */
class VolumeType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CapsuleVolume',
          'description' => 'Get information about payload volume.',
          'fields'      => [
              'cubic_meters'    => Type::float(),
              'cubic_feet'      => Type::float()
              ]
        ];

        parent::__construct($config);
    }
}