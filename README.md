# semver-to-drupal-tag

[![Build Status](https://travis-ci.org/eiriksm/semver-to-drupal-tag.svg?branch=master)](https://travis-ci.org/eiriksm/semver-to-drupal-tag)
[![Coverage Status](https://coveralls.io/repos/github/eiriksm/semver-to-drupal-tag/badge.svg?branch=master)](https://coveralls.io/github/eiriksm/semver-to-drupal-tag?branch=master)

## What is it?

A super small library to convert semver versions to Drupal git tags.

## Why is it?

On [Violinist.io](https://violinist.io), the continuous automatic composer updater, we retrieve the changelog between versions when we create pull requests to your projects. So to retrieve these based on your composer files, we need to convert between these formats.

## Installation

```
composer require semver-to-drupal
```

## Usage

```php
<?php

use eiriksm\SemverToDrupal\Converter;

// Default usage, assumes major version 8.
print Converter::convertToDrupal('1.0.0'); // Prints 8.x-1.0.
// Usage with Drupal version 7.
print Converter::convertToDrupal('1.16.0', 7); // Prints 7.x-1.16.
```
