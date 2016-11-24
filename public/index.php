<?php

require_once('../vendor/autoload.php');
$request = new \App\Core\Request();
$response = new \App\Core\Response();
$render = new \App\Core\Render();
$validator = new \App\Core\Validator();

$resolver = new \App\Core\Resolver($request, $response, $render, $validator);
$controller = $resolver->resolve();
$controller->start();
//var_dump($controller); die;