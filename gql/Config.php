<?php


namespace gql;

/**
 * https://github.com/r-spacex/SpaceX-API
 *
 * Class Config
 * @package gql
 */
final class Config
{
    private function __construct(){}

    /**
     * Const to display server errors
     */
    const DEBUG = true; //todo don't forget to set FALSE on production

    /**
     * official urls
     */
    const LAUNCHES_DATA_URI = [
        'past'      => 'https://api.spacexdata.com/v2/launches',
        'latest'    => 'https://api.spacexdata.com/v2/launches/latest',
        'upcoming'  => 'https://api.spacexdata.com/v2/launches/upcoming',
        'all'       => 'https://api.spacexdata.com/v2/launches/all'
    ];

    const ROCKETS_DATA_URI = [
        'all'           => 'https://api.spacexdata.com/v2/rockets',
        'falcon1'       => 'https://api.spacexdata.com/v2/rockets/falcon1',
        'falcon9'       => 'https://api.spacexdata.com/v2/rockets/falcon9',
        'falconHeavy'   => 'heavy https://api.spacexdata.com/v2/rockets/falconheavy'
    ];

    const CAPSULE_DATA_URI = [
        'all'           => 'https://api.spacexdata.com/v2/capsules',
        'dragon1'       => 'https://api.spacexdata.com/v2/capsules/dragon1',
        'dragon2'       => 'https://api.spacexdata.com/v2/capsules/dragon2',
        'crewDragon'    => 'https://api.spacexdata.com/v2/capsules/crewdragon'
    ];

    const LAUNCHPAD_DATA_URI = [
        'all' => 'https://api.spacexdata.com/v2/launchpads'
    ];

    const CAPSULE_DETAIL_DATA_URI = [
        'all' => 'https://api.spacexdata.com/v2/parts/caps'
    ];

    const DETAILED_CORE_DATA_URI = [
        'all' => 'https://api.spacexdata.com/v2/parts/cores'
    ];

    const COMPANY_INFO_URI = [
        'all' => 'https://api.spacexdata.com/v2/info'
    ];
}