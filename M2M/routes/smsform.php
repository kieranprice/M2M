<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'SmsFormView.php';

$app->get("/", function(Request $request, Response $response){
    $view = new SmsFormView();
    $view->setHtml();
    $response->getBody()->write($view->getHtml());
    return $response;
});