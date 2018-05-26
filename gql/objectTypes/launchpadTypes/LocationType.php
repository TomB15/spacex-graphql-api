<?php

namespace gql\objectTypes\launchpadTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class LocationType
 * @package gql\objectTypes\launchpadTypes
 */
class LocationType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'LaunchpadLocation',
          'description' => 'Get information about launchpad location.',
          'fields'      => [
              'name'        => Type::string(),
              'region'      => Type::string(),
              'latitude'    => Type::float(),
              'longitude'   => Type::float(),
          ]
        ];

        parent::__construct($config);
    }
}