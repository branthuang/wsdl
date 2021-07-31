<?php
require_once 'EvaluateReport.php';

$servidorSoap = new SoapServer("EvaluateReport.wsdl");
$servidorSoap->setClass('EvaluateReport');
$servidorSoap->handle();