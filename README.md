[![Build Status](https://travis-ci.org/Domi202/template.svg?branch=master)](https://travis-ci.org/Domi202/template)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Domi202/template/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Domi202/template/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Domi202/template/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Domi202/template/?branch=master)

# PHP Composer Package Template

This repository provides a skeleton for a Composer package.

## Usage

Run `composer create-project kreemers/template`

## Pre-Installed and configured features

* PHPUnit https://phpunit.de (with Scrutinizer Code Coverage)
* Psalm https://github.com/vimeo/psalm (Static Code Analysis)
* PHP_CodeSniffer https://github.com/squizlabs/PHP_CodeSniffer (with Doctrine Standard)
* Travis CI https://travis-ci.org
* Scrutinizer https://scrutinizer-ci.com
* Infection https://github.com/infection/infection (Mutation Testing Framework)

## Composer Scripts

### `composer run test`

Runs the tests in your development environment (CodeSniffer -> Psalm -> PHPUnit)

### `composer run fix`

Runs the CodeFixer to automatically fix code style issues

### `composer run infection`

Runs mutation tests

> In a nutshell, it
> * runs the test suite to see if all tests pass
> * mutates the source code with a set of predefined mutators (mutation operators)
> * for each Mutant (modified code with one change) it runs the tests that cover changed line
> * analyzes whether the tests start to fail
> * collects the results of killed, escaped Mutants, errors and timeouts

see: https://infection.github.io/guide/#What-is-Infection

### `composer run ci`

Is for running the tests in a CI Environment (e.g. Travis CI) and create coverage reports
