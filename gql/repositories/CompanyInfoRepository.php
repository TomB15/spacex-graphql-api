<?php


namespace gql\repositories;


use gql\Config;
use gql\entities\ResolverEntityInterface;

/**
 * Class CompanyInfoRepository
 * @package gql\repositories
 */
class CompanyInfoRepository implements DataRepositoryInterface
{
    /**
     * @param \gql\entities\ResolverEntityInterface $resolve
     * @return array|mixed
     */
    public function retrieveData(ResolverEntityInterface $resolve)
    {
        return $this->retrieveAllData();
    }

    /**
     * Fetches all data starting with oldest record.
     * @return array
     */
    private function retrieveAllData()
    {
        $data = [];
        $data[] = array_merge($data,
            $this->fetchData(Config::COMPANY_INFO_URI['all']));

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