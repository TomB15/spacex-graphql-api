<?php


namespace gql\objectTypes\launchTypes;


use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

/**
 * Class LinksType
 * @package gql\objectTypes
 */
class LinksType extends ObjectType
{
    public function __construct(){
        $config = [
            'name'          => 'LaunchLinks',
            'description'   => 'Website urls to video, article, mission patch.',
            'fields'        => [
                'mission_patch'         => Type::string(),
                'article_link'          => Type::string(),
                'video_link'            => Type::string(),
                'reddit_campaign'       => Type::string(),
                'reddit_launch'         => Type::string(),
                'reddit_recovery'       => Type::string(),
                'reddit_media'          => Type::string(),
                'presskit'              => Type::string(),
            ]
        ];

        parent::__construct($config);
    }

}