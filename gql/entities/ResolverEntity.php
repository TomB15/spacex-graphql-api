<?php

namespace gql\entities;

use GraphQL\Type\Definition\ResolveInfo;

/**
 * Class ResolverEntity
 * @package gql\entities
 */
class ResolverEntity implements ResolverEntityInterface
{
    private $source;

    private $args;

    private $context;

    private $info;

    /**
     * ResolverEntity constructor.
     * @param array                                $source
     * @param array                                $args
     * @param array                                $context
     * @param \GraphQL\Type\Definition\ResolveInfo $info
     */
    public function __construct(Array $source, Array $args, Array $context, ResolveInfo $info)
    {
        $this->source = $source;
        $this->args = $args;
        $this->context = $context;
        $this->info = $info;
    }

    /**
     * @return array
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @return ResolveInfo
     */
    public function getInfo()
    {
        return $this->info;
    }



}