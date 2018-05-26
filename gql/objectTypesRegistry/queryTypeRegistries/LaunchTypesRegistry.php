<?php

namespace gql\objectTypesRegistry\queryTypeRegistries;

use gql\objectTypes\launchTypes\CoreType;
use gql\objectTypes\launchTypes\FirstStageType;
use gql\objectTypes\launchTypes\LaunchSiteType;
use gql\objectTypes\launchTypes\LinksType;
use gql\objectTypes\launchTypes\PayloadType;
use gql\objectTypes\launchTypes\ReuseType;
use gql\objectTypes\launchTypes\RocketType;
use gql\objectTypes\launchTypes\SecondStageType;
use gql\objectTypes\launchTypes\TelemetryType;


/**
 * Class LaunchTypesRegistry
 * @package gql\objectTypesRegistry
 */
class LaunchTypesRegistry
{
    private static $rocket;
    private static $telemetry;
    private static $reuse;
    private static $launchSite;
    private static $links;
    private static $firstStage;
    private static $secondStage;
    private static $core;
    private static $payload;

    public static function rocket()
    {
        if(self::$rocket === null){
            self::$rocket = new RocketType();
        }
        return self::$rocket;
    }

    public static function telemetry()
    {
        if(self::$telemetry === null){
            self::$telemetry = new TelemetryType();
        }
        return self::$telemetry;
    }

    public static function reuse()
    {
        if(self::$reuse === null){
            self::$reuse = new ReuseType();
        }
        return self::$reuse;
    }

    public static function launchSite()
    {
        if(self::$launchSite === null){
            self::$launchSite = new LaunchSiteType();
        }
        return self::$launchSite;
    }

    public static function links()
    {
        if(self::$links === null){
            self::$links = new LinksType();
        }
        return self::$links;
    }

    public static function firstStage()
    {
        if(self::$firstStage === null){
            self::$firstStage = new FirstStageType();
        }
        return self::$firstStage;
    }

    public static function secondStage()
    {
        if(self::$secondStage === null){
            self::$secondStage = new SecondStageType();
        }
        return self::$secondStage;
    }

    public static function core()
    {
        if(self::$core === null){
            self::$core = new CoreType();
        }
        return self::$core;
    }

    public static function payload()
    {
        if(self::$payload === null){
            self::$payload = new PayloadType();
        }
        return self::$payload;
    }
}