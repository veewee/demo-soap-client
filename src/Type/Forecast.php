<?php

namespace WeatherService\Type;

class Forecast
{

    /**
     * @var \DateTime
     */
    private $Date;

    /**
     * @var int
     */
    private $WeatherID;

    /**
     * @var string
     */
    private $Desciption;

    /**
     * @var \WeatherService\Type\temp
     */
    private $Temperatures;

    /**
     * @var \WeatherService\Type\POP
     */
    private $ProbabilityOfPrecipiation;


}

