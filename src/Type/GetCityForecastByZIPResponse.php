<?php

namespace WeatherService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCityForecastByZIPResponse implements ResultInterface
{

    /**
     * @var \WeatherService\Type\ForecastReturn
     */
    private $GetCityForecastByZIPResult;

    /**
     * @return \WeatherService\Type\ForecastReturn
     */
    public function getGetCityForecastByZIPResult()
    {
        return $this->GetCityForecastByZIPResult;
    }


}

