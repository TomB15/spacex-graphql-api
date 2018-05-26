<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class CapsuleType
 * @package gql\objectTypes
 */
class CapsuleType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'Capsule',
          'description' => 'Get information about a capsule.',
          'fields'      => [
              'id'                  => Type::string(),
              'name'                => Type::string(),
              'type'                => Type::string(),
              'active'              => Type::boolean(),
              'crew_capacity'       => Type::int(),
              'sidewall_angle_deg'  => Type::float(),
              'orbit_duration_yr'   => Type::float(),
              'heat_shield'         => ObjectTypesRegistry::queryTypes()->capsuleTypes()->heatShield(),
              'thrusters'           => Type::listOf(ObjectTypesRegistry::queryTypes()->capsuleTypes()->thruster()),
              'launch_payload_mass' => ObjectTypesRegistry::queryTypes()->capsuleTypes()->mass(),
              'launch_payload_vol'  => ObjectTypesRegistry::queryTypes()->capsuleTypes()->volume(),
              'return_payload_mass' => ObjectTypesRegistry::queryTypes()->capsuleTypes()->mass(),
              'return_payload_vol'  => ObjectTypesRegistry::queryTypes()->capsuleTypes()->volume(),
              'pressurized_capsule' => ObjectTypesRegistry::queryTypes()->capsuleTypes()->pressurizedCapsule(),
              'trunk'               => ObjectTypesRegistry::queryTypes()->capsuleTypes()->trunk(),
              'height_w_trunk'      => ObjectTypesRegistry::queryTypes()->capsuleTypes()->dimensions(),
              'diameter'            => ObjectTypesRegistry::queryTypes()->capsuleTypes()->dimensions(),
          ]
        ];

        parent::__construct($config);
    }
}