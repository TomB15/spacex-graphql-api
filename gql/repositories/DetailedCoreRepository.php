<?php


namespace gql\repositories;


use gql\Config;
use gql\entities\ResolverEntityInterface;

/**
 * Class DetailedCoreRepository
 * @package gql\repositories
 */
class DetailedCoreRepository implements DataRepositoryInterface
{
    /**
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return array|mixed
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
            $this->fetchData(Config::DETAILED_CORE_DATA_URI['all']));

        return $data;
    }

    /**
     * Fetches data due to selected filter.
     * @param $arguments
     * @return array
     */
    private function retrieveFilteredData($arguments)
    {
        $data = [];
        foreach ((array)$arguments['specific'] as $k => $argument){
            $data[] = array_merge($data,
                $this->fetchData(Config::DETAILED_CORE_DATA_URI['all'] . '/' . $argument));
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