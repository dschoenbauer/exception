<?php

namespace DSchoenbauer\Exception\Http;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-21 at 21:37:45.
 */
class NotFoundTest extends \DSchoenbauer\Tests\Exception\Http\AbstractHttpException {

    /**
     * @var NotFound
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new NotFound;
        $this->setCommonInterface(\DSchoenbauer\Exception\ExceptionInterface::class)
        ->setParentClass(\DSchoenbauer\Exception\Platform\DomainException::class)
        ->setErrorNumber(404);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

}
