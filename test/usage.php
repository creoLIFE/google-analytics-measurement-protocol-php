<?php
ERROR_REPORTING(E_ALL);

require __DIR__ . "/../src/loader.php";


$pProduct = 'EXAMPLE-PRODUCT';
$pUrl = 'https://github.com/creoLIFE/GaMP/blob/master/composer.json';


$classGamp = new Gamp\Gamp();

$cGeneral = new \Gamp\PayloadParamGroups\General();
$cGeneral->setV(1);
$cGeneral->setTid('UA-27773588-3');
$classGamp->addGroup($cGeneral);

$cUser = new \Gamp\PayloadParamGroups\User();
$cUser->setCid($cUser->getCidNumber());
$classGamp->addGroup($cUser);

$cHit = new \Gamp\PayloadParamGroups\Hit();
$cHit->setT('event'); //Event type
$classGamp->addGroup($cHit);

$cEvent = new \Gamp\PayloadParamGroups\Event();
$cEvent->setEc('Download'); //Event category
$cEvent->setEa($pProduct);
$cEvent->setEl($pUrl);
$classGamp->addGroup($cEvent);

$cCustomDimension = new \Gamp\PayloadParamGroups\CustomDimension();
$cCustomDimension->setCd('1', 'TEST-001-A'); //Test ID
$cCustomDimension->setCd('2', $pProduct); //Product name
$cCustomDimension->setCd('3', $pUrl); //Download URL
$classGamp->addGroup($cCustomDimension);

$cEcommerce = new \Gamp\PayloadParamGroups\Hit();
//$cEcommerce->checkRequiredFields();

$classGamp->setRequestType('POST');
$classGamp->setFiltered(true);
//$classGamp->setRequestProtocol('SSL');

$classGamp->track();


echo "<pre>";
print_r($classGamp->getParams());
