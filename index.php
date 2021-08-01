<?php

use Wsdl2PhpGenerator\Config;

require __DIR__.'/vendor/autoload.php';

$outputDir = __DIR__.'/tmp';
$generator = new \Wsdl2PhpGenerator\Generator();
$config = new Config(
    [
        'inputFile' => 'EvaluateReport.wsdl',
        'outputDir' => $outputDir
    ]
);
$generator->generate($config);
