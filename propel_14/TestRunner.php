<?php

require dirname(__FILE__) . '/Propel14TestSuite.php';
$time = microtime(true);
$memory = memory_get_usage(true);
$test = new Propel14TestSuite();
$test->initialize();
$test->run();
echo sprintf(" %11s | %6.2f |\n", number_format(memory_get_usage(true) - $memory), (microtime(true) - $time));
