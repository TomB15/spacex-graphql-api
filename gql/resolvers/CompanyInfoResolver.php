<?php

namespace gql\resolvers;

use gql\entities\ResolverEntityInterface;
use gql\repositories\CompanyInfoRepository;
use gql\Resolver;

/**
 * Class CompanyInfoResolver
 * @package gql\resolvers
 */
class CompanyInfoResolver extends Resolver implements ResolverImplementation
{
    /**
     * Postpones fetching data until all fieldNames are loaded.
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     */
    protected function deferDataFetching(ResolverEntityInterface $resolve)
    {
        if (empty(parent::$dataBuffer)) {
            $repository = new CompanyInfoRepository();
            parent::$dataBuffer[$resolve->getInfo()->fieldName] = $repository->retrieveData($resolve);
        }

        return parent::$dataBuffer[$resolve->getInfo()->fieldName];
    }
}