# Soap-client demo

## Install dependencies

```sh
composer install
```

## Run code generation wizard

```sh
$ ./vendor/bin/soap-client wizard
```

## Example code generation wizard
```
 Where would you like to store your config file? [config/soap-client.php]:
 > config/soap-client.php

 Wsdl location (URL or path to file):
 > resources/weather.wsdl

 Generic name used to name this client (Results in <name>Client <name>Classmap etc.):
 > Weather

 Directory where the client should be generated in:
 > src

 Namespace for your client:
 > WeatherService

 This tool can set some basic code generation rules. This requires some knowledge of the SOAP service.
Take a look at the message section in the WSDL. Are you able to match request and response elements based on keywords?
These keywords are used in a case insensitive regex match with '/' delimiters, escape accordingly! (yes/no) [no]:
 > yes

 Keyword for matching request objects []:
 > ^Get.*(?<!Response$)$

 Keyword for matching response objects []:
 > Response$
```

## Run tests

If you used the settings mentioned above, you are able to run the e2e tests.

```sh
$ composer test
```

## Want to generate a more advanced codebase?

*Note:* this will generate slightly different classes so the unit tests won't work. Try to fix them to see how the models behave.

```sh
$ composer generate-advanced
```

## Clear generated code

Want to test some other settings? No problem, just run

````sh
$ composer clear
````
