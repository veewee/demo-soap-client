<?php

namespace WeatherService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCityWeatherByZIPResponse implements ResultInterface
{

    /**
     * @var \WeatherService\Type\WeatherReturn
     */
    private $GetCityWeatherByZIPResult;

    /**
     * @return \WeatherService\Type\WeatherReturn
     */
    public function getGetCityWeatherByZIPResult()
    {
        return $this->GetCityWeatherByZIPResult;
    }


}

