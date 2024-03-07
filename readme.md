# Rector loop error

## Instructions

1. Clone this project
1. Run `composer install`
1. Run `./vendor/bin/rector`

## Expected

Single `declare(strict_types=1)`-statement added to `./src/NoNamespace.php`

## Actual

Multiple `declare(strict_types=1)`-statements added in an endless loop.
