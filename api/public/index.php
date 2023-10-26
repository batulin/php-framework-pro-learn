<?php

declare(strict_types=1);

use GaryClarke\Framework\Http\Kernel;
use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;

require_once dirname(__DIR__) . '/vendor/autoload.php';

// request receive
$request = Request::createFromGlobals();

// perform some logic

$kernel = new Kernel();

$response = $kernel->handle($request);

// send response (string of content)

$response->send();
