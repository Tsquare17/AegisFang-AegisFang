<?php

use AegisFang\Application;


$app = new Application();

$response = $app->run();

echo $response;