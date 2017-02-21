<?php

namespace DSchoenbauer\Exception\Platform;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-21 at 21:37:50.
 */
class InvalidArgumentExceptionTest extends \DSchoenbauer\Tests\Exception\Platform\AbstractPlatformException {

    /**
     * @var InvalidArgumentException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new InvalidArgumentException;
        $this->setCommonInterface(\DSchoenbauer\Exception\ExceptionInterface::class)->setParentClass(\InvalidArgumentException::class);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

}
