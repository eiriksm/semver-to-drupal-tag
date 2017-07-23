<?php

namespace eiriksm\SemverToDrupal;

class Converter {
  public static function convertToDrupal($version, $drupal_version = 8) {
    $parts = explode('.', $version);
    return sprintf('%d.x-%d.%d', $drupal_version, $parts[0], $parts[1]);
  }
}
