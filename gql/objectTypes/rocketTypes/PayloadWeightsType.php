<?php

namespace gql\objectTypes\rocketTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class PayloadWeightsType
 * @package gql\objectTypes\RocketTypes
 */
class PayloadWeightsType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name'          => 'RocketPayloadWeights',
            'description'   => 'Info about payload weight.',
            'fields'        => [
                'id'    => Type::string(),
                'name'  => Type::string(),
                'kg'    => Type::float(),
                'lb'    => Type::float()
            ]
        ];

        parent::__construct($config);
    }

}