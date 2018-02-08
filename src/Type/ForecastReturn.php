<?php

namespace WeatherService\Type;

class ForecastReturn
{

    /**
     * @var bool
     */
    private $Success;

    /**
     * @var string
     */
    private $ResponseText;

    /**
     * @var string
     */
    private $State;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $WeatherStationCity;

    /**
     * @var \WeatherService\Type\ArrayOfForecast
     */
    private $ForecastResult;


}

