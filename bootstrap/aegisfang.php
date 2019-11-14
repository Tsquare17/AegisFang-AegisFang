<?php

use AegisFang\Application;


$app = new Application(dirname(__DIR__, 1) . '/');

$response = $app->run();

echo $response;