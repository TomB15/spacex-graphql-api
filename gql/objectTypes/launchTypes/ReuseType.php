<?php


namespace gql\objectTypes\launchTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class ReuseType
 * @package gql\objectTypes
 */
class ReuseType extends ObjectType
{

    public function __construct()
    {
        $config = [
            'name'          => 'ReuseOfLaunchedRocket',
            'description'   => 'Data about rocket reusability.',
            'fields'        => [
                'core'          => Type::boolean(),
                'side_core1'    => Type::boolean(),
                'side_core2'    => Type::boolean(),
                'fairings'      => Type::boolean(),
                'capsule'       => Type::boolean()
            ]
        ];

        parent::__construct($config);
    }

}