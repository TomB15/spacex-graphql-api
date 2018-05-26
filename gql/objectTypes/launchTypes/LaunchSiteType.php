<?php


namespace gql\objectTypes\launchTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class LaunchSiteType
 * @package gql\objectTypes
 */
class LaunchSiteType extends ObjectType
{
    public function __construct(){
        $config = [
            'name'          => 'CurrentLaunchSite',
            'description'   => 'Data about launch site.',
            'fields'        => [
                'site_id'           => Type::string(),
                'site_name'         => Type::string(),
                'site_name_long'    => Type::string()
            ]
        ];

        parent::__construct($config);
    }

}