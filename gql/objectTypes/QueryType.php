<?php


namespace gql\objectTypes;


use gql\entities\ResolverEntity;
use gql\ObjectTypesRegistry;
use gql\ResolversRegistry;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;

/**
 * Class Query
 * @package gql\objectTypes
 */
class QueryType extends ObjectType
{
    public function __construct(){
        $config = [
            'name'          => 'Query',
            'description'   => 'Returns all queries.',
            'fields'        => [
                'companyInfo'  => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->companyInfo()),
                    'description'   => 'Basic information about SpaceX.',
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveCompanyInfo(new ResolverEntity($source, $args, $context, $info));
                    }
                ],
                'launches'  => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->launch()),
                    'description'   => 'Data about launches. Select timeFrame: past, latest, upcoming or don\'t use any argument for all data.',
                    'args'          => [
                        'timeFrame'     => Type::listOf(Type::string())
                    ],
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveLaunches(new ResolverEntity($source, $args, $context, $info));
                    }
                ],
                'rockets'   => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->rocket()),
                    'description'   => 'Data about rockets. Select rocketType: falcon1, falcon9, falconHeavy or don\'t use any argument for all data.',
                    'args'          => [
                        'rocketType'    => Type::listOf(Type::string())
                    ],
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveRockets(new ResolverEntity($source, $args, $context, $info));
                    }
                ],
                'capsule'   => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->capsule()),
                    'description'   => 'Data about capsules. Select capsuleType: dragon1, dragon2, crewDragon or don\'t use any argument for all data.',
                    'args'          => [
                        'capsuleType'    => Type::listOf(Type::string())
                    ],
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveCapsules(new ResolverEntity($source, $args, $context, $info));
                    }
                ],
                'launchpad'   => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->launchpad()),
                    'description'   => 'Data about launchpad. Select specific: ... or don\'t use any argument for all data.',
                    'args'          => [
                        'specific'    => Type::listOf(Type::string())
                    ],
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveLaunchpad(new ResolverEntity($source, $args, $context, $info));
                    }
                ],
                'capsuleDetail'   => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->capsuleDetails()),
                    'description'   => 'Details about capsule. Select specific: ... or don\'t use any argument for all data.',
                    'args'          => [
                        'specific'    => Type::listOf(Type::string())
                    ],
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveCapsuleDetail(new ResolverEntity($source, $args, $context, $info));
                    }
                ],
                'detailedCore'   => [
                    'type'          => Type::listOf(ObjectTypesRegistry::queryTypes()->detailedCore()),
                    'description'   => 'Detailed data about core. Select specific: ... or don\'t use any argument for all data . ',
                    'args'          => [
                        'specific'    => Type::listOf(Type::string())
                    ],
                    'resolve'       => function($source, $args, $context, ResolveInfo $info){
                        $source     = $source   ?: [];
                        $args       = $args     ?: [];
                        $context    = $context  ?: [];
                        $info       = $info     ?: new ResolveInfo([]);

                        return ResolversRegistry::getInstance()->resolveDetailedCore(new ResolverEntity($source, $args, $context, $info));
                    }
                ]
            ]
        ];

        parent::__construct($config);
    }

}