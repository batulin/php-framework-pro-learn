<?php

declare(strict_types=1);

use GaryClarke\Framework\Http\Kernel;
use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;

define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__) . '/vendor/autoload.php';

// request receive
$request = Request::createFromGlobals();

$router = new \GaryClarke\Framework\Routing\Router();

// perform some logic

$kernel = new Kernel($router);

$response = $kernel->handle($request);

// send response (string of content)

$response->send();
