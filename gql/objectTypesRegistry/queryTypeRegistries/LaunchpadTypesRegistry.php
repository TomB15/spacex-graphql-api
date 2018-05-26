<?php

namespace gql\objectTypesRegistry\queryTypeRegistries;

use gql\objectTypes\launchpadTypes\LocationType;

/**
 * Class LaunchpadTypesRegistry
 * @package gql\objectTypesRegistry
 */
class LaunchpadTypesRegistry
{
    private static $location;

    public static function location(){
        if(self::$location === null){
            self::$location = new LocationType();
        }
        return self::$location;
    }
}