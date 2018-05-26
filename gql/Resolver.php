<?php


namespace gql;


use gql\entities\ResolverEntityInterface;
use GraphQL\Deferred;

/**
 * Class Resolver
 * @package gql
 */
abstract class Resolver
{
    protected static $dataBuffer = [];
    protected static $keyBuffer = [];

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolve(ResolverEntityInterface $resolveEntity)
    {
        $this->bufferKeys($resolveEntity);
        return new Deferred(function() use($resolveEntity) {
            return $this->deferDataFetching($resolveEntity);
        });
    }

    /**
     * Postpones fetching data until all fieldNames are loaded.
     *
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return mixed
     * @throws \gql\exceptions\GraphqlException
     */
    abstract protected function deferDataFetching(ResolverEntityInterface $resolve);

    /**
     * Temporarily stores gql keys.
     *
     * @param \gql\entities\ResolverEntityInterface $resolve
     */
    private function bufferKeys(ResolverEntityInterface $resolve){
        self::$keyBuffer = [];
        if (!in_array((array)$resolve->getInfo()->fieldName, self::$keyBuffer,
            false)) {
            self::$keyBuffer[] = $resolve->getInfo()->fieldName;
        }
    }
}