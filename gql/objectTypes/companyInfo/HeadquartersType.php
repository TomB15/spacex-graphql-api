<?php

namespace gql\objectTypes\companyInfo;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class HeadquartersType
 * @package gql\objectTypes
 */
class HeadquartersType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'Headquarters',
          'description' => 'Information about company headquarters.',
          'fields'      => [
              'address'     => Type::string(),
              'city'        => Type::string(),
              'state'       => Type::string()
          ]
        ];

        parent::__construct($config);
    }
}