<?php

namespace gql\objectTypesRegistry\queryTypeRegistries;


use gql\objectTypes\rocketTypes\CompositeFairingType;
use gql\objectTypes\rocketTypes\HeightType;
use gql\objectTypes\rocketTypes\PayloadType;
use gql\objectTypes\rocketTypes\SecondStageType;
use gql\objectTypes\rocketTypes\DiameterType;
use gql\objectTypes\rocketTypes\EnginesType;
use gql\objectTypes\rocketTypes\FirstStageType;
use gql\objectTypes\rocketTypes\LandingLegsType;
use gql\objectTypes\rocketTypes\MassType;
use gql\objectTypes\rocketTypes\PayloadWeightsType;
use gql\objectTypes\rocketTypes\ThrustType;

/**
 * Class RocketTypesRegistry
 * @package gql\objectTypesRegistry
 */
class RocketTypesRegistry
{
    private static $height;
    private static $diameter;
    private static $mass;
    private static $payloadWeights;
    private static $firstStage;
    private static $secondStage;
    private static $landingLegs;
    private static $thrust;
    private static $payload;
    private static $compositeFairing;
    private static $engines;

    public static function height(){
        if(self::$height === null){
            self::$height = new HeightType();
        }

        return self::$height;
    }

    public static function diameter(){
        if(self::$diameter === null){
            self::$diameter = new DiameterType();
        }

        return self::$diameter;
    }

    public static function mass(){
        if(self::$mass === null){
            self::$mass = new MassType();
        }

        return self::$mass;    }

    public static function payloadWeights(){
        if(self::$payloadWeights === null){
            self::$payloadWeights = new PayloadWeightsType();
        }

        return self::$payloadWeights;    }

    public static function firstStage(){
        if(self::$firstStage === null){
            self::$firstStage = new FirstStageType();
        }

        return self::$firstStage;
    }

    public static function secondStage(){
        if(self::$secondStage === null){
            self::$secondStage = new SecondStageType();
        }

        return self::$secondStage;    }

    public static function engines(){
        if(self::$engines === null){
            self::$engines = new EnginesType();
        }

        return self::$engines;    }

    public static function landingLegs(){
        if(self::$landingLegs === null){
            self::$landingLegs = new LandingLegsType();
        }

        return self::$landingLegs;    }

    public static function thrust(){
        if(self::$thrust === null){
            self::$thrust = new ThrustType();
        }

        return self::$thrust;    }

    public static function payload(){
        if(self::$payload === null){
            self::$payload = new PayloadType();
        }

        return self::$payload;    }

    public static function compositeFairing(){
        if(self::$compositeFairing === null){
            self::$compositeFairing = new CompositeFairingType();
        }

        return self::$compositeFairing;    }
}