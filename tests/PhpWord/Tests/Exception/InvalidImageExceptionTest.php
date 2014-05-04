<?php
/**
 * PHPWord
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2014 PHPWord
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Tests\Exception;

use PhpOffice\PhpWord\Exception\InvalidImageException;

/**
 * Test class for PhpOffice\PhpWord\Exception\InvalidImageException
 *
 * @coversDefaultClass \PhpOffice\PhpWord\Exception\InvalidImageException
 * @runTestsInSeparateProcesses
 */
class InvalidImageExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Throw new exception
     *
     * @expectedException \PhpOffice\PhpWord\Exception\InvalidImageException
     * @covers            \PhpOffice\PhpWord\Exception\InvalidImageException
     */
    public function testThrowException()
    {
        throw new InvalidImageException;
    }
}
