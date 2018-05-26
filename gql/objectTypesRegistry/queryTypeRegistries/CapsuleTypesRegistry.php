<?php

namespace gql\objectTypesRegistry\queryTypeRegistries;


use gql\objectTypes\capsuleTypes\HeatShieldType;
use gql\objectTypes\capsuleTypes\ThrusterType;
use gql\objectTypes\capsuleTypes\CargoType;
use gql\objectTypes\capsuleTypes\DimensionsType;
use gql\objectTypes\capsuleTypes\MassType;
use gql\objectTypes\capsuleTypes\PressurizedCapsuleType;
use gql\objectTypes\capsuleTypes\TrunkType;
use gql\objectTypes\capsuleTypes\VolumeType;
use gql\objectTypes\capsuleTypes\ThrustType;

/**
 * Class CapsuleTypesRegistry
 * @package gql\objectTypesRegistry
 */
class CapsuleTypesRegistry
{
    private static $heatShield;
    private static $thruster;
    private static $mass;
    private static $volume;
    private static $pressurizedCapsule;
    private static $trunk;
    private static $dimensions;
    private static $thrust;
    private static $cargo;

    /**
     * @return \gql\objectTypes\capsuleTypes\HeatShieldType
     */
    public static function heatShield(){
        if(self::$heatShield === null){
           self::$heatShield = new HeatShieldType();
        }
        return self::$heatShield;
    }

    /**
     * @return \gql\objectTypes\capsuleTypes\ThrusterType
     */
    public static function thruster(){
        if(self::$thruster === null){
            self::$thruster = new ThrusterType();
        }
        return self::$thruster;
    }

    /**
     * @return \gql\objectTypes\MassType
     */
    public static function mass(){
        if(self::$mass === null){
            self::$mass = new MassType();
        }
        return self::$mass;
    }

    /**
     * @return \gql\objectTypes\VolumeType
     */
    public static function volume(){
        if(self::$volume === null){
            self::$volume = new VolumeType();
        }
        return self::$volume;
    }

    /**
     * @return \gql\objectTypes\PressurizedCapsuleType
     */
    public static function pressurizedCapsule(){
        if(self::$pressurizedCapsule === null){
            self::$pressurizedCapsule = new PressurizedCapsuleType();
        }
        return self::$pressurizedCapsule;
    }

    /**
     * @return \gql\objectTypes\TrunkType
     */
    public static function trunk(){
        if(self::$trunk === null){
            self::$trunk = new TrunkType();
        }
        return self::$trunk;
    }

    /**
     * @return \gql\objectTypes\DimensionsType
     */
    public static function dimensions(){
        if(self::$dimensions === null){
            self::$dimensions = new DimensionsType();
        }
        return self::$dimensions;
    }

    /**
     * @return \gql\objectTypes\capsuleTypes\ThrustType
     */
    public static function thrust(){
        if(self::$thrust === null){
            self::$thrust = new ThrustType();
        }
        return self::$thrust;
    }

    /**
     * @return \gql\objectTypes\CargoType
     */
    public static function cargo(){
        if(self::$cargo === null){
            self::$cargo = new CargoType();
        }
        return self::$cargo;
    }
}