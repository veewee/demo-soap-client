<?php
require_once __DIR__ . '/../vendor/autoload.php';

\VCR\VCR::configure()
    ->setCassettePath('test/fixtures/vcr')
    ->enableLibraryHooks(['curl'])
;
\VCR\VCR::turnOn();

define('PACKAGE_DIR', dirname(__DIR__));
define('FIXTURE_DIR', realpath(__DIR__ . '/fixtures'));
