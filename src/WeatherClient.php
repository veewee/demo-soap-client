<?php

namespace WeatherService;

class WeatherClient extends \Phpro\SoapClient\Client
{

    public function getWeatherInformation(\WeatherService\Type\GetWeatherInformation $GetWeatherInformation) : \WeatherService\Type\GetWeatherInformationResponse
    {
        return $this->call('GetWeatherInformation', $GetWeatherInformation);
    }

    public function getCityForecastByZIP(\WeatherService\Type\GetCityForecastByZIP $GetCityForecastByZIP) : \WeatherService\Type\GetCityForecastByZIPResponse
    {
        return $this->call('GetCityForecastByZIP', $GetCityForecastByZIP);
    }

    public function getCityWeatherByZIP(\WeatherService\Type\GetCityWeatherByZIP $GetCityWeatherByZIP) : \WeatherService\Type\GetCityWeatherByZIPResponse
    {
        return $this->call('GetCityWeatherByZIP', $GetCityWeatherByZIP);
    }


}

