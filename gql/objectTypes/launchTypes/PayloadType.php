<?php


namespace gql\objectTypes\launchTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class PayloadType
 * @package gql\objectTypes
 */
class PayloadType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'Payload',
            'description'   => 'Data about payload.',
            'fields'        => [
                'payload_id'        => Type::string(),
                'reused'            => Type::boolean(),
                'customers'         => Type::listOf(Type::string()),
                'payload_type'      => Type::string(),
                'payload_mass_kg'   => Type::float(),
                'payload_mass_lbs'  => Type::float(), 
                'orbit'             => Type::string(),
            ]
        ];

        parent::__construct($config);
    }
}