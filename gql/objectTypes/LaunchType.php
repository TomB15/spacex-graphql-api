<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class LaunchType
 * @package gql\objectTypes
 */
class LaunchType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'Launch',
          'description' => 'Get rocket launches. Accepted arguments are: past, upcoming, latest. If you will not set an argument you will get all launches.',
          'fields'      => [
              'flight_number'       => Type::int(),
              'launch_year'         => Type::string(),
              'launch_date_unix'    => Type::int(),
              'launch_date_utc'     => Type::string(),
              'launch_date_local'   => Type::string(),
              'rocket'              => ObjectTypesRegistry::queryTypes()->launchTypes()->rocket(),
              'telemetry'           => ObjectTypesRegistry::queryTypes()->launchTypes()->telemetry(),
              'reuse'               => ObjectTypesRegistry::queryTypes()->launchTypes()->reuse(),
              'launch_site'         => ObjectTypesRegistry::queryTypes()->launchTypes()->launchSite(),
              'launch_success'      => Type::boolean(),
              'links'               => ObjectTypesRegistry::queryTypes()->launchTypes()->links(),
              'details'             => Type::string(),
          ]
        ];

        parent::__construct($config);
    }


}