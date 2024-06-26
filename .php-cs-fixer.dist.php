<?php

declare(strict_types=1);

/**
 * Execute the command like this:
 *  php-cs-fixer --config=.php-cs-fixer.dist.php fix src tests
 */
require_once __DIR__.'/tools/php-cs-fixer/vendor/autoload.php';

$config = new PhpCsFixer\Config();

return $config;
