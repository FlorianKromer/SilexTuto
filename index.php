<?php

require_once __DIR__.'/vendor/autoload.php';

$app = require __DIR__.'/web/config/kernel.php';
require __DIR__.'/web/config/kernel-oauth.php';

require __DIR__.'/web/src/controllers/controllers.php';

define('VERSION', 'V2/');






$app->run();
