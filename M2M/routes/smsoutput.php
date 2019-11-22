<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'SmsModel.php';

$app->post("/", function(Request $request, Response $response){
   $sms = new SmsModel();
   $sms->setSwitches(isset($_POST['switchOne']), isset($_POST['switchTwo']), isset($_POST['switchThree']), isset($_POST['switchFour']));
   $sms->setFan($_POST['fanDir']);
   $sms->setHeater($_POST['temperature']);
   $sms->setKeypad($_POST['keypad']);
   $response->getBody()->write($sms->toString());
   return $response;


});