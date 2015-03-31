Google Analytict Measurement Protocol PHP 
====
Google Analytict Measurement Protocol library implementation for PHP


Usage
====
1) Instance GAMP class
```
$classGamp = new Gamp\Gamp();
```

2) Set required general parameters for Payload
```
$cGeneral = new \Gamp\PayloadParamGroups\General();
$cGeneral->setV(1);
$cGeneral->setTid('UA-27773588-3');
$classGamp->addGroup($cGeneral);

$cUser = new \Gamp\PayloadParamGroups\User();
$cUser->setCid($cUser->getCidNumber());
$classGamp->addGroup($cUser);
```

3) Set required HIT parameters for Payload
```
$cHit = new \Gamp\PayloadParamGroups\Hit();
$cHit->setT('event'); //Event type
$classGamp->addGroup($cHit);

$cEvent = new \Gamp\PayloadParamGroups\Event();
$cEvent->setEc('Download');
$cEvent->setEa('Some product name');
$cEvent->setEl('Some URL');
$classGamp->addGroup($cEvent);
```

4) Set another parameters - depends on your needs
4a) Example custom dimensions
```
$cCustomDimension = new \Gamp\PayloadParamGroups\CustomDimension();
$cCustomDimension->setCd('1', 'TEST-001-A');
$cCustomDimension->setCd('2', 'Some product name');
$cCustomDimension->setCd('3', 'Some URL');
$classGamp->addGroup($cCustomDimension);
```
5) Do tracking
```
$classGamp->track();
```
5a) Set request type
```
$classGamp->setRequestType('POST');
```
5b) Remove not used (unset) parameters from request
```
$classGamp->setFiltered(true);
```
5c) Set protocol
```
$classGamp->setRequestProtocol('SSL');
```

