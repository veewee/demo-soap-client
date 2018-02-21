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

    // Array types of types start with 'ArrayOf'
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\IteratorAssembler()),
                new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions()))

            ]),
            '/^ArrayOf/i'
        )
    )

    // Request types start with 'Get' but don't end on 'Response'
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
            ]),
            '/^Get.*(?<!Response$)$/i'
        )
    )

    // Result types end with the keyword Return
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
                new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())),
            ]),
            '/Return$/i'
        )
    )

    // Response providers types end with the keyword Response
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultProviderAssembler()),
            ]),
            '/Response$/i'
        )
    )

    // Regular types: cant start with Array|Get and can't stop with Response|Return
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())),
                new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler())
            ]),
            '/^(?!Array)(?!Get).*(?<!Response)(?<!Return)$/ix'
        )
    )
;
