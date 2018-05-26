<?php


namespace gql;

use gql\objectTypes\QueryType;
use gql\objectTypesRegistry\QueryTypeRegistry;


/**
 * Class ObjectTypesRegistry
 * @package gql
 */
class ObjectTypesRegistry
{
    private static $query;
    private static $queryTypes;


    public static function query(){
        if(self::$query === null){
            self::$query = new QueryType();
        }
        return self::$query;
    }
    public static function queryTypes(){
        if(self::$queryTypes === null){
            self::$queryTypes = new QueryTypeRegistry();
        }
        return self::$queryTypes;
    }
}