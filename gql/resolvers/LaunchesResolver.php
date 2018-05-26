<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\LaunchesRepository;
use gql\Resolver;

/**
 * Class LaunchesResolver
 * @package gql\resolvers
 */
class LaunchesResolver extends Resolver implements ResolverImplementation
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
            $repository = new LaunchesRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}