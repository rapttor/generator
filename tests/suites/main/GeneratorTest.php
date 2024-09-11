<?php

namespace RapTToR;

use PHPUnit\Framework\TestCase;

/**
 *  Corresponding class to test YourClass class
 *
 *  For each class in your library, there should be a corresponding unit test
 *
 *  @author yourname
 */
class GeneratorTest extends TestCase
{
    /**
     * Just check if the YourClass has no syntax errors
     */
    public function testIsThereAnySyntaxError()
    {
        $string = null;
        $object = new \RapTToR\Generator();
        if (is_object($object)) {
            $useragent = $object->UserAgent();
        }
        $this->assertTrue(is_object($object) && is_string($useragent));
    }
    public function testUserAgent()
    {
        $object = new \RapTToR\Generator();
        if (is_object($object)) {
            $string = $object->UserAgent();
        }
        $this->assertTrue(is_object($object) && is_string($string));
    }
}
