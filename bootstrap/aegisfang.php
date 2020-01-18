<?php

use AegisFang\Application;


$app = new Application(dirname(__DIR__, 1) . '/');

$aegis = $app->run();

$aegis->getContent();
