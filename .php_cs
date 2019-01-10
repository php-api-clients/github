<?php declare(strict_types=1);

use ApiClients\Tools\CsFixerConfig\PhpCsFixerConfig;
use PhpCsFixer\Config;

return (function (): Config
{
    $paths = [
        __DIR__ . DIRECTORY_SEPARATOR . 'src',
        __DIR__ . DIRECTORY_SEPARATOR . 'tests',
        __DIR__ . DIRECTORY_SEPARATOR . 'examples',
    ];

    $config = PhpCsFixerConfig::create();
    $rules = $config->getRules();
    $rules['void_return'] = false;

    return $config
        ->setRules($rules)
        ->setFinder(
            PhpCsFixer\Finder::create()
                ->in($paths)
                ->append($paths)
        )
        ->setUsingCache(false)
    ;
})();
