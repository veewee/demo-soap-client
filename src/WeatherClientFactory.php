<?php

namespace WeatherService;

use WeatherService\WeatherClient;
use WeatherService\WeatherClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class WeatherClientFactory
{

    public static function factory(string $wsdl) : \WeatherService\WeatherClient
    {
        $clientFactory = new PhproClientFactory(WeatherClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(WeatherClassmap::getCollection());

        return $clientBuilder->build();
    }


}

