<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class RocketType
 * @package gql\objectTypes
 */
class RocketType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'Rocket',
          'description' => 'Get information about a rocket.',
          'fields'      => [
              'id'                  => Type::string(),
              'name'                => Type::string(),
              'type'                => Type::string(),
              'active'              => Type::boolean(),
              'stages'              => Type::int(),
              'boosters'            => Type::int(),
              'cost_per_launch'     => Type::float(),
              'success_rate_pct'    => Type::float(),
              'first_flight'        => Type::string(),
              'country'             => Type::string(),
              'company'             => Type::string(),
              'height'              => ObjectTypesRegistry::queryTypes()->rocketTypes()->height(),
              'diameter'            => ObjectTypesRegistry::queryTypes()->rocketTypes()->diameter(),
              'mass'                => ObjectTypesRegistry::queryTypes()->rocketTypes()->mass(),
              'payload_weights'     => Type::listOf(ObjectTypesRegistry::queryTypes()->rocketTypes()->payloadWeights()),
              'first_stage'         => ObjectTypesRegistry::queryTypes()->rocketTypes()->firstStage(),
              'second_stage'        => ObjectTypesRegistry::queryTypes()->rocketTypes()->secondStage(),
              'engines'             => ObjectTypesRegistry::queryTypes()->rocketTypes()->engines(),
              'landing_legs'        => ObjectTypesRegistry::queryTypes()->rocketTypes()->landingLegs(),
              'description'         => Type::string()
          ]
        ];

        parent::__construct($config);
    }


}