<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-21 at 21:37:46.
 */
class UnsupportedMediaTypeTest extends \DSchoenbauer\Tests\Exception\Http\AbstractHttpException {

    /**
     * @var Unauthorized
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new UnsupportedMediaType;
        $this->setCommonInterface(\DSchoenbauer\Exception\ExceptionInterface::class)
        ->setParentClass(ClientErrorException::class)
        ->setErrorNumber(415);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

}
