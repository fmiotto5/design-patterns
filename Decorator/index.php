<?php

use Decorator\Decorators\BeginRequestMiddleware;
use Decorator\Decorators\EndRequestMiddleware;
use Decorator\Decorators\LoggerMiddleware;
use Decorator\MiddlewareComponent;

require_once("../autoloader.php");

$middleware = new MiddlewareComponent();
$middleware = new BeginRequestMiddleware($middleware);
$middleware = new LoggerMiddleware($middleware);
$middleware = new EndRequestMiddleware($middleware);

$request = "GET /mocked_request";
$middleware->handle($request);