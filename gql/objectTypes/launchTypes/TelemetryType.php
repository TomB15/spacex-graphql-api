<?php


namespace gql\objectTypes\launchTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class TelemetryType
 * @package gql\objectTypes
 */
class TelemetryType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'            => 'LaunchTelemetry',
          'description'     => 'Telemetry data.',
          'fields'          => [
              'flight_club'  => Type::string()
          ]
        ];

        parent::__construct($config);
    }
}