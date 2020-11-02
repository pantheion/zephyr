<?php

use Pantheion\Engine\Application;
use Pantheion\Http\Request;
use Pantheion\Routing\Router;

include_once "vendor/autoload.php";

(new Application)->make(Router::class)->handle(Request::capture());
