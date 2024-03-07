<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/src',

    ])
    ->withPhpSets(php83: true)
    ->withRules([
        DeclareStrictTypesRector::class
    ]);
