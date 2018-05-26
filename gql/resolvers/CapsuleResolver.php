<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\CapsuleRepository;
use gql\Resolver;

/**
 * Class CapsuleResolver
 * @package gql\resolvers
 */
class CapsuleResolver extends Resolver implements ResolverImplementation
{
    /**
     * Postpones fetching data until all fieldNames are loaded.
     *
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     * @throws \gql\exceptions\GraphqlException
     */
    protected function deferDataFetching(ResolverEntityInterface $resolve)
    {
        if (empty(parent::$dataBuffer)) {
            $repository = new CapsuleRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}