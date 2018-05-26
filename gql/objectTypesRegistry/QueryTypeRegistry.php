<?php


namespace gql\objectTypesRegistry;

use gql\objectTypes\CapsuleDetailType;
use gql\objectTypes\CapsuleType;
use gql\objectTypes\CompanyInfoType;
use gql\objectTypes\DetailedCoreType;
use gql\objectTypes\LaunchpadType;
use gql\objectTypes\LaunchType;
use gql\objectTypes\RocketType;
use gql\objectTypesRegistry\queryTypeRegistries\CapsuleTypesRegistry;
use gql\objectTypesRegistry\queryTypeRegistries\CompanyInfoTypesRegistry;
use gql\objectTypesRegistry\queryTypeRegistries\LaunchpadTypesRegistry;
use gql\objectTypesRegistry\queryTypeRegistries\LaunchTypesRegistry;
use gql\objectTypesRegistry\queryTypeRegistries\RocketTypesRegistry;


/**
 * Class QueryTypeRegistry
 * @package gql\objectTypesRegistry
 */
class QueryTypeRegistry
{
    private static $launch;
    private static $launchTypes;
    private static $rocket;
    private static $rocketTypes;
    private static $capsule;
    private static $capsuleTypes;
    private static $launchpad;
    private static $launchpadTypes;
    private static $capsuleDetails;
    private static $detailedCore;
    private static $companyInfo;
    private static $companyInfoTypes;

    public static function launch()
    {
        if(self::$launch === null){
            self::$launch = new LaunchType();
        }
        return self::$launch;
    }

    public static function launchTypes()
    {
        if(self::$launchTypes === null){
            self::$launchTypes = new LaunchTypesRegistry();
        }
        return self::$launchTypes;
    }

    public static function rocket()
    {
        if(self::$rocket === null){
            self::$rocket = new RocketType();
        }
        return self::$rocket;
    }

    public static function rocketTypes()
    {
        if(self::$rocketTypes === null){
            self::$rocketTypes = new RocketTypesRegistry();
        }
        return self::$rocketTypes;
    }

    public static function capsule()
    {
        if(self::$capsule === null){
            self::$capsule = new CapsuleType();
        }
        return self::$capsule;
    }

    public static function capsuleTypes()
    {
        if(self::$capsuleTypes === null){
            self::$capsuleTypes = new CapsuleTypesRegistry();
        }
        return self::$capsuleTypes;
    }

    public static function launchpad()
    {
        if(self::$launchpad === null){
            self::$launchpad = new LaunchpadType();
        }
        return self::$launchpad;
    }

    public static function launchpadTypes()
    {
        if(self::$launchpadTypes === null){
            self::$launchpadTypes = new LaunchpadTypesRegistry();
        }
        return self::$launchpadTypes;
    }

    public static function capsuleDetails()
    {
        if(self::$capsuleDetails === null){
            self::$capsuleDetails = new CapsuleDetailType();
        }
        return self::$capsuleDetails;
    }


    public static function detailedCore()
    {
        if(self:: $detailedCore === null){
            self::$detailedCore = new DetailedCoreType();
        }
        return self::$detailedCore;
    }


    public static function companyInfo()
    {
        if(self::$companyInfo === null){
            self::$companyInfo = new CompanyInfoType();
        }
        return self::$companyInfo;
    }

    public static function companyInfoTypes()
    {
        if(self::$companyInfoTypes === null){
            self::$companyInfoTypes = new CompanyInfoTypesRegistry();
        }
        return self::$companyInfoTypes;
    }

}