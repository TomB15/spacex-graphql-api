<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\CapsuleDetailRepository;
use gql\Resolver;

/**
 * Class CapsuleDetailResolver
 * @package gql\resolvers
 */
class CapsuleDetailResolver extends Resolver implements ResolverImplementation
{
    /**
     * Postpones fetching data until all fieldNames are loaded.
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     */
    protected function deferDataFetching(ResolverEntityInterface $resolve)
    {
        if (empty(parent::$dataBuffer)) {
            $repository = new CapsuleDetailRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}