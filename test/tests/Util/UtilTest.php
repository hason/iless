<?php
/*
 * This file is part of the ILess
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Utility tests
 *
 * @package ILess
 * @subpackage test
 */
class ILess_Util_Test extends ILess_TestCase
{
  /**
   * @covers normalizePath
   * @dataProvider getDataForNormalizePathTest
   */
  public function testNormalizePath($path, $expected)
  {
    $this->assertEquals(ILess_Util::normalizePath($path), $expected);
  }

  public function getDataForNormalizePathTest()
  {
    return array(
      array('foo', 'foo'),
      array('http://foobar.com', 'http://foobar.com'),
      array(__FILE__, str_replace('\\', '/', __FILE__)),
      array('/a/d/tmp/../foo/test.jpg', '/a/d/foo/test.jpg')
    );
  }

  /**
   * @covers camelize
   * @dataProvider getDataForCamelizeTest
   */
  public function testCamelize($underscored, $expected)
  {
    $this->assertEquals($expected, ILess_Util::camelize($underscored));
  }

  public function getDataForCamelizeTest()
  {
    return array(
      array('foo', 'foo'),
      array('source_map', 'sourceMap'),
      array('sourceMap', 'sourceMap')
    );
  }

}
