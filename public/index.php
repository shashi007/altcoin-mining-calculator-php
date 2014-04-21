<?php

require_once('../bootstrap.php');

// Pull in the configured adaptor we want to use in the app.
require_once(APP_DIR . '/subsidy_functions/HirocoinSubsidyFunction.php');
require_once(APP_DIR . '/subsidy_functions/DarkcoinSubsidyFunction.php');

$app = new \n00bsys0p\CalculatorApp($config);

try {
    $app->run();
} catch(\Exception $e) {
    die($e->getMessage());
}
