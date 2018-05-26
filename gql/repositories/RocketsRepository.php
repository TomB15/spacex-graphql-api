<?php


namespace gql\repositories;


use gql\Config;
use gql\entities\ResolverEntityInterface;
use gql\exceptions\ExceptionMessages;
use gql\exceptions\GraphqlException;

/**
 * Class RocketRepository
 * @package gql\repositories
 */
class RocketsRepository implements DataRepositoryInterface
{
    /**
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return array|mixed
     * @throws \gql\exceptions\GraphqlException
     */
    public function retrieveData(ResolverEntityInterface $resolve)
    {
        if (empty($resolve->getArgs())) {
            $data = $this->retrieveAllData();
        } else {
            $data = $this->retrieveFilteredData($resolve->getArgs());
        }

        return $data;
    }

    /**
     * Fetches all data starting with oldest record.
     * @return array
     */
    private function retrieveAllData()
    {
        $data = [];
        $data = array_merge($data,
            $this->fetchData(Config::ROCKETS_DATA_URI['all']));

        return $data;
    }

    /**
     * Fetches data due to selected filter.
     * @param $arguments
     * @return array
     * @throws \gql\exceptions\GraphqlException
     */
    private function retrieveFilteredData($arguments)
    {
        $data = [];
        foreach ((array)$arguments['rocketType'] as $k => $argument) {

            if (Config::ROCKETS_DATA_URI[$argument] === null) {
                throw new GraphqlException(ExceptionMessages::invalidArgument('Rockets',
                    $argument), true, 'InvalidParameter');
            }

            $data[] = array_merge($data,
                $this->fetchData(Config::ROCKETS_DATA_URI[$argument]));
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