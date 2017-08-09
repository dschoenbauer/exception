<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DSchoenbauer\Tests\Exception\Platform;

/**
 * Description of AbstractPlatformExceptionTest
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class AbstractPlatformException extends \PHPUnit_Framework_TestCase {

    protected $parentClass;
    protected $commonInterface;
    protected $object;

    public function testParentClass() {
        $this->assertInstanceOf($this->getParentClass(), $this->object);
    }
    
    public function testCommonInterface(){
        $this->assertInstanceOf($this->getCommonInterface(), $this->object);
    }

    public function getParentClass() {
        return $this->parentClass;
    }

    public function getCommonInterface() {
        return $this->commonInterface;
    }

    public function setParentClass($parentClass) {
        $this->parentClass = $parentClass;
        return $this;
    }

    public function setCommonInterface($commonInterface) {
        $this->commonInterface = $commonInterface;
        return $this;
    }
    
        
    public function testDefaultMessgae(){
        $class = basename(get_class($this->object));
        $newName = strtoupper(preg_replace('/([a-z])([A-Z])/', '$1_$2', $class));
        $message = constant("DSchoenbauer\Exception\Enum\ExceptionDefaultMessages::" . $newName);
        $this->assertEquals($message, $this->object->getDefaultMessage());
        $this->assertEquals($message, $this->object->getMessage());
    }

}
