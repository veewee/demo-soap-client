<?php

namespace WeatherService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCityForecastByZIP implements RequestInterface
{

    /**
     * @var string
     */
    private $ZIP;

    /**
     * Constructor
     *
     * @var string $ZIP
     */
    public function __construct($ZIP)
    {
        $this->ZIP = $ZIP;
    }


}

