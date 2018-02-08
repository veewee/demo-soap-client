<?php

namespace WeatherService;

use WeatherService\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class WeatherClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('GetWeatherInformation', Type\GetWeatherInformation::class),
            new ClassMap('GetWeatherInformationResponse', Type\GetWeatherInformationResponse::class),
            new ClassMap('ArrayOfWeatherDescription', Type\ArrayOfWeatherDescription::class),
            new ClassMap('WeatherDescription', Type\WeatherDescription::class),
            new ClassMap('GetCityForecastByZIP', Type\GetCityForecastByZIP::class),
            new ClassMap('GetCityForecastByZIPResponse', Type\GetCityForecastByZIPResponse::class),
            new ClassMap('ForecastReturn', Type\ForecastReturn::class),
            new ClassMap('ArrayOfForecast', Type\ArrayOfForecast::class),
            new ClassMap('Forecast', Type\Forecast::class),
            new ClassMap('temp', Type\Temp::class),
            new ClassMap('POP', Type\POP::class),
            new ClassMap('GetCityWeatherByZIP', Type\GetCityWeatherByZIP::class),
            new ClassMap('GetCityWeatherByZIPResponse', Type\GetCityWeatherByZIPResponse::class),
            new ClassMap('WeatherReturn', Type\WeatherReturn::class),
        ]);
    }


}

