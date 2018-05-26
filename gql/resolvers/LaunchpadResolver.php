<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\LaunchpadRepository;
use gql\Resolver;

/**
 * Class LaunchpadResolver
 * @package gql\resolvers
 */
class LaunchpadResolver extends Resolver implements ResolverImplementation
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
            $repository = new LaunchpadRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}