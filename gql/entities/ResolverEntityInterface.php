<?php


namespace gql\entities;


use GraphQL\Type\Definition\ResolveInfo;

/**
 * Interface ResolverEntityInterface
 * @package gql\entities
 */
interface ResolverEntityInterface
{
    /**
     * ResolverEntityInterface constructor.
     * @param array                                $source
     * @param array                                $args
     * @param array                                $context
     * @param \GraphQL\Type\Definition\ResolveInfo $info
     */
    public function __construct(Array $source, Array $args, Array $context, ResolveInfo $info);

    /**
     * @return array
     */
    public function getSource();

    /**
     * @return array
     */
    public function getArgs();

    /**
     * @return array
     */
    public function getContext();

    /**
     * @return ResolveInfo
     */
    public function getInfo();
}