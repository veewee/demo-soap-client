<?php

namespace WeatherService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetWeatherInformationResponse implements ResultInterface
{

    /**
     * @var \WeatherService\Type\ArrayOfWeatherDescription
     */
    private $GetWeatherInformationResult;

    /**
     * @return \WeatherService\Type\ArrayOfWeatherDescription
     */
    public function getGetWeatherInformationResult()
    {
        return $this->GetWeatherInformationResult;
    }


}

