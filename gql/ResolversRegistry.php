<?php


namespace gql;


use gql\entities\ResolverEntityInterface;
use gql\resolvers\CapsuleDetailResolver;
use gql\resolvers\CapsuleResolver;
use gql\resolvers\CompanyInfoResolver;
use gql\resolvers\DetailedCoreResolver;
use gql\resolvers\LaunchesResolver;
use gql\resolvers\LaunchpadResolver;
use gql\resolvers\RocketsResolver;

/**
 * Class ResolversRegistry
 * @package gql
 */
class ResolversRegistry
{
    private static $instance;

    private $companyInfoResolver;
    private $launchesResolver;
    private $rocketsResolver;
    private $capsuleResolver;
    private $launchpadResolver;
    private $capsuleDetailResolver;
    private $detailedCoreResolver;


    private function __construct(){}

    /**
     * @return \gql\ResolversRegistry
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveCompanyInfo(ResolverEntityInterface $resolveEntity){
        if($this->companyInfoResolver === null){
            $this->companyInfoResolver = new CompanyInfoResolver();
        }

        return $this->companyInfoResolver->resolve($resolveEntity);
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveLaunches(ResolverEntityInterface $resolveEntity){
        if($this->launchesResolver === null){
            $this->launchesResolver = new LaunchesResolver();
        }

        return $this->launchesResolver->resolve($resolveEntity);
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveRockets(ResolverEntityInterface $resolveEntity)
    {
        if($this->rocketsResolver === null){
            $this->rocketsResolver = new RocketsResolver();
        }

        return $this->rocketsResolver->resolve($resolveEntity);
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveCapsules(ResolverEntityInterface $resolveEntity)
    {
        if($this->capsuleResolver === null){
            $this->capsuleResolver = new CapsuleResolver();
        }

        return $this->capsuleResolver->resolve($resolveEntity);
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveLaunchpad(ResolverEntityInterface $resolveEntity)
    {
        if($this->launchpadResolver === null){
            $this->launchpadResolver = new LaunchpadResolver();
        }

        return $this->launchpadResolver->resolve($resolveEntity);
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveCapsuleDetail(ResolverEntityInterface $resolveEntity)
    {
        if($this->capsuleDetailResolver === null){
            $this->capsuleDetailResolver = new CapsuleDetailResolver();
        }

        return $this->capsuleDetailResolver->resolve($resolveEntity);
    }

    /**
     * @param \gql\entities\ResolverEntityInterface $resolveEntity
     * @return \GraphQL\Deferred|mixed
     */
    public function resolveDetailedCore(ResolverEntityInterface $resolveEntity)
    {
        if($this->detailedCoreResolver === null){
            $this->detailedCoreResolver = new DetailedCoreResolver();
        }

        return $this->detailedCoreResolver->resolve($resolveEntity);
    }
}