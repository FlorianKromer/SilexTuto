<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/config/kernel.php';
require __DIR__.'/config/kernel-oauth.php';

require __DIR__.'/src/controllers/controllers.php';

define('VERSION', 'V2/');






$app->run();
