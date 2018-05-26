<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\DetailedCoreRepository;
use gql\Resolver;

/**
 * Class DetailedCoreResolver
 * @package gql\resolvers
 */
class DetailedCoreResolver extends Resolver implements ResolverImplementation
{
    /**
     * Postpones fetching data until all fieldNames are loaded.
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     */
    public function deferDataFetching(ResolverEntityInterface $resolve)
    {
        if (empty(parent::$dataBuffer)) {
            $repository = new DetailedCoreRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}