<?php

namespace DSchoenbauer\Exception\Platform;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-21 at 21:37:52.
 */
class LogicExceptionTest extends \DSchoenbauer\Tests\Exception\Platform\AbstractPlatformException {

    /**
     * @var LogicException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new LogicException;
        $this->setCommonInterface(\DSchoenbauer\Exception\ExceptionInterface::class)->setParentClass(\LogicException::class);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

}
