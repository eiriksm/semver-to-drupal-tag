<?php

use eiriksm\SemverToDrupal\Converter;

class ConverterTest extends \PHPUnit_Framework_TestCase {
  public function testConvertToTag() {
    $this->assertEquals('8.x-1.0', Converter::convertToDrupal('1.0.0'));
    $this->assertEquals('8.x-2.4', Converter::convertToDrupal('2.4.0'));
    $this->assertEquals('7.x-1.0', Converter::convertToDrupal('1.0.0', 7));
    $this->assertEquals('7.x-1.16', Converter::convertToDrupal('1.16.0', 7));
  }
}
