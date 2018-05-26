<?php


namespace gql\repositories;

use gql\entities\ResolverEntityInterface;

/**
 * Interface LaunchesRepositoryInterface
 * @package gql\repositories
 */
interface DataRepositoryInterface
{
    /**
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     */
    public function retrieveData(ResolverEntityInterface $resolve);
}