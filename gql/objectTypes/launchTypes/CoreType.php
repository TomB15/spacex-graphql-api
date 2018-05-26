<?php


namespace gql\objectTypes\launchTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class CoreType
 * @package gql\objectTypes
 */
class CoreType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'Core',
            'description'   => 'Data about rocket core.',
            'fields'        => [
                'core_serial'       => Type::string(),
                'flight'            => Type::int(),
                'block'             => Type::int(),
                'reused'            => Type::boolean(),
                'land_success'      => Type::boolean(),
                'landing_type'      => Type::string(),
                'landing_vehicle'   => Type::string()
            ]
        ];

        parent::__construct($config);
    }

}