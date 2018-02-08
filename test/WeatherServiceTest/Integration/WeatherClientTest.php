<?php

declare(strict_types=1);

namespace WeatherServiceTest\Integration;

use Http\Adapter\Guzzle6\Client as GuzzleClient;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use PHPUnit\Framework\TestCase;
use WeatherService\WeatherClient;
use WeatherService\Type;

class WeatherClientTest extends TestCase
{
    /**
     * @var WheaterClient
     */
    private $client;

    protected function setUp()
    {
        $clientBuilder = new ClientBuilder(
            new ClientFactory(WeatherClient::class),
            PACKAGE_DIR . '/resources/wheater.wsdl',
            [
                'wsdl_cache' => WSDL_CACHE_NONE,
                'soap_version' => SOAP_1_2,
            ]
        );
        $clientBuilder->withClassMaps(WeatherClassMap::getCollection());
        $clientBuilder->withHandler(
            HttPlugHandle::createForClient(GuzzleClient::createWithConfig([]))
        );

        $this->client = $clientBuilder->build();
    }

    /**
     * @test
     * @vcr city-weather-by-zip-10013.yml
     *
     * Note: this method will throw Exceptions if VCR can't take over the configured SoapClient.
     */
    function it_can_fetch_city_wheater_for_zip_10013()
    {
        $response = $this->client->getCityWheaterByZIP(
            new Type\GetCityWeatherByZipRequest('10013')
        );

        $this->assertInstanceOf(Type\GetCityWeatherByZipRequest::class, $response);
        $this->assertTrue($response->getSuccess());
    }
}
