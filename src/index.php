<?php

include 'function.php';

showMessage('test');

echo __DIR__ . PHP_EOL;

//include '../function/function.php';

echo __FILE__ . PHP_EOL;

print_r(get_included_files());