<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('resources/weather.wsdl')
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('WeatherService\Type')
    ->setClientDestination('src')
    ->setClientName('WeatherClient')
    ->setClientNamespace('WeatherService')
    ->setClassMapDestination('src')
    ->setClassMapName('WeatherClassmap')
    ->setClassMapNamespace('WeatherService')
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
            ]),
            '/^Get.*(?<!Response$)$/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
                new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())),
            ]),
            '/Response$/i'
        )
    );
