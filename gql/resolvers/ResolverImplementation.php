<?php


namespace gql\resolvers;


use gql\entities\ResolverEntityInterface;

/**
 * Interface Resolver
 * @package gql\resolvers
 */
interface ResolverImplementation
{
    /**
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     */
    public function resolve(ResolverEntityInterface $resolve);
}