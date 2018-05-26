<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\RocketsRepository;
use gql\Resolver;

/**
 * Class RocketsResolver
 * @package gql\resolvers
 */
class RocketsResolver extends Resolver implements ResolverImplementation
{
    /**
     * Postpones fetching data until all fieldNames are loaded.
     *
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     * @throws \gql\exceptions\GraphqlException
     */
    public function deferDataFetching(ResolverEntityInterface $resolve)
    {
        if (empty(parent::$dataBuffer)) {
            $repository = new RocketsRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}