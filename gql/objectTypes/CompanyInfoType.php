<?php

namespace gql\objectTypes;


use gql\ObjectTypesRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class CompanyInfoType
 * @package gql\objectTypes
 */
class CompanyInfoType extends ObjectType
{
    public function __construct()
    {
        $config = [
          'name'        => 'CompanyInfo',
          'description' => 'Basic information about SpaceX.',
          'fields'      => [
              'name'            => Type::string(),
              'founder'         => Type::string(),
              'founded'         => Type::int(),
              'employees'       => Type::int(),
              'vehicles'        => Type::int(),
              'launch_sites'    => Type::int(),
              'test_sites'      => Type::int(),
              'ceo'             => Type::string(),
              'cto'             => Type::string(),
              'coo'             => Type::string(),
              'cto_propulsion'  => Type::string(),
              'valuation'       => Type::float(),
              'headquarters'    => ObjectTypesRegistry::queryTypes()->companyInfoTypes()->headquarters(),
              'summary'         => Type::string(),
          ]
        ];

        parent::__construct($config);
    }
}