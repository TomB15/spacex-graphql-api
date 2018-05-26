<?php

namespace gql\objectTypesRegistry\queryTypeRegistries;


use gql\objectTypes\companyInfo\HeadquartersType;

/**
 * Class CompanyInfoRegistry
 * @package gql\objectTypesRegistry
 */
class CompanyInfoTypesRegistry
{
    private static $headquarters;

    public static function headquarters(){
        if(self::$headquarters === null){
            self::$headquarters = new HeadquartersType();
        }
        return self::$headquarters;
    }
}