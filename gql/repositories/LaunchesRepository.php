<?php

namespace gql\repositories;

use gql\Config;
use gql\entities\ResolverEntityInterface;
use gql\exceptions\ExceptionMessages;
use gql\exceptions\GraphqlException;

/**
 * Class LaunchesRepository
 * Constructed as singleton design pattern
 * @package gql\repositories
 */
class LaunchesRepository implements DataRepositoryInterface
{
    /**
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return array|mixed
     * @throws \gql\exceptions\GraphqlException
     */
    public function retrieveData(ResolverEntityInterface $resolve)
    {
        if (empty($resolve->getArgs())) {
            $launchData = $this->retrieveAllData();
        } else {
            $launchData = $this->retrieveFilteredData($resolve->getArgs());
        }

        return $launchData;
    }

    /**
     * Fetches all data starting with oldest record.
     * @return array
     */
    private function retrieveAllData(){
        $data = [];
        $data = array_merge($data,$this->fetchData(Config::LAUNCHES_DATA_URI['all']));
        return $data;
    }

    /**
     * Fetches data due to selected filter.
     * @param $arguments
     * @return array
     * @throws \gql\exceptions\GraphqlException
     */
    private function retrieveFilteredData($arguments){
        $data = [];
        foreach ((array)$arguments['timeFrame'] as $k => $argument) {

            if(Config::LAUNCHES_DATA_URI[$argument] === null)
            {
                throw new GraphqlException(ExceptionMessages::invalidArgument('launches', $argument), true, 'InvalidParameter');
            }

            $data = array_merge($data, $this->fetchData(Config::LAUNCHES_DATA_URI[$argument]));
        }

        return $data;
    }

    /**
     * Fetches data from url.
     * @param $url
     * @return mixed
     */
    private function fetchData($url)
    {
        $data = file_get_contents($url);
        return json_decode($data, true);
    }
}