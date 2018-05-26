<?php

//todo[tomasb] udělej na tohle autoloader

require_once __DIR__ . '/ResolversRegistry.php';
require_once __DIR__ . '/Resolver.php';
require_once __DIR__ . '/Config.php';

require_once __DIR__ . '/handlers/RequestHandler.php';
require_once __DIR__ . '/handlers/ResponseHandler.php';
require_once __DIR__ . '/handlers/QueryHandler.php';

require_once __DIR__ . '/exceptions/ApiException.php';
require_once __DIR__ . '/exceptions/ServerException.php';
require_once __DIR__ . '/exceptions/GraphqlException.php';
require_once __DIR__ . '/exceptions/ExceptionMessages.php';

require_once __DIR__ . '/entities/ResolverEntityInterface.php';
require_once __DIR__ . '/entities/ResolverEntity.php';

require_once __DIR__ . '/repositories/DataRepositoryInterface.php';
require_once __DIR__ . '/repositories/LaunchesRepository.php';
require_once __DIR__ . '/repositories/RocketsRepository.php';
require_once __DIR__ . '/repositories/CapsuleDetailRepository.php';
require_once __DIR__ . '/repositories/CapsuleRepository.php';
require_once __DIR__ . '/repositories/DetailedCoreRepository.php';
require_once __DIR__ . '/repositories/LaunchpadRepository.php';
require_once __DIR__ . '/repositories/CompanyInfoRepository.php';

require_once __DIR__ . '/resolvers/ResolverImplementation.php';
require_once __DIR__ . '/resolvers/LaunchesResolver.php';
require_once __DIR__ . '/resolvers/RocketsResolver.php';
require_once __DIR__ . '/resolvers/CapsuleDetailResolver.php';
require_once __DIR__ . '/resolvers/CapsuleResolver.php';
require_once __DIR__ . '/resolvers/DetailedCoreResolver.php';
require_once __DIR__ . '/resolvers/LaunchpadResolver.php';
require_once __DIR__ . '/resolvers/CompanyInfoResolver.php';

require_once __DIR__ . '/objectTypes/QueryType.php';
require_once __DIR__ . '/objectTypes/LaunchType.php';
require_once __DIR__ . '/objectTypes/RocketType.php';
require_once __DIR__ . '/objectTypes/CapsuleDetailType.php';
require_once __DIR__ . '/objectTypes/CapsuleType.php';
require_once __DIR__ . '/objectTypes/DetailedCoreType.php';
require_once __DIR__ . '/objectTypes/LaunchpadType.php';

require_once __DIR__ . '/objectTypes/launchTypes/CoreType.php';
require_once __DIR__ . '/objectTypes/launchTypes/FirstStageType.php';
require_once __DIR__ . '/objectTypes/launchTypes/LaunchSiteType.php';
require_once __DIR__ . '/objectTypes/launchTypes/LinksType.php';
require_once __DIR__ . '/objectTypes/launchTypes/PayloadType.php';
require_once __DIR__ . '/objectTypes/launchTypes/ReuseType.php';
require_once __DIR__ . '/objectTypes/launchTypes/RocketType.php';
require_once __DIR__ . '/objectTypes/launchTypes/SecondStageType.php';
require_once __DIR__ . '/objectTypes/launchTypes/TelemetryType.php';


require_once __DIR__ . '/objectTypes/capsuleTypes/CargoType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/DimensionsType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/HeatShieldType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/MassType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/PressurizedCapsuleType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/ThrusterType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/ThrustType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/TrunkType.php';
require_once __DIR__ . '/objectTypes/capsuleTypes/VolumeType.php';

require_once __DIR__ . '/objectTypes/launchpadTypes/LocationType.php';

require_once __DIR__ . '/objectTypes/CompanyInfoType.php';
require_once __DIR__ . '/objectTypes/companyInfo/HeadquartersType.php';


require_once __DIR__ . '/objectTypes/rocketTypes/CompositeFairingType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/DiameterType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/EnginesType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/FirstStageType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/HeightType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/LandingLegsType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/MassType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/PayloadType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/PayloadWeightsType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/SecondStageType.php';
require_once __DIR__ . '/objectTypes/rocketTypes/ThrustType.php';

require_once __DIR__ . '/objectTypesRegistry/QueryTypeRegistry.php';
require_once __DIR__ . '/objectTypesRegistry/queryTypeRegistries/CompanyInfoTypesRegistry.php';
require_once __DIR__ . '/objectTypesRegistry/queryTypeRegistries/CapsuleTypesRegistry.php';
require_once __DIR__ . '/objectTypesRegistry/queryTypeRegistries/LaunchTypesRegistry.php';
require_once __DIR__ . '/objectTypesRegistry/queryTypeRegistries/LaunchpadTypesRegistry.php';
require_once __DIR__ . '/objectTypesRegistry/queryTypeRegistries/RocketTypesRegistry.php';

require_once __DIR__ . '/ObjectTypesRegistry.php';

require_once __DIR__ . '/Schema.php';

