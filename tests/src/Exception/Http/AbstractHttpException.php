<?php

namespace DSchoenbauer\Tests\Exception\Http;

use DSchoenbauer\Exception\Http\HttpExceptionInterface;
use DSchoenbauer\Tests\Exception\Platform\AbstractPlatformException;

/**
 * Description of AbstractHttpException
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class AbstractHttpException extends AbstractPlatformException{
    protected $errorNumber;
    protected $object;


    public function testHttpInterface(){
        $this->assertInstanceOf(HttpExceptionInterface::class, $this->object);
    }


    public function testErrorNumber(){
        $this->assertEquals($this->getErrorNumber(),$this->object->getCode());
    }
    
    public function testDefaultMessgae(){
        $class = basename(str_replace("\\", DIRECTORY_SEPARATOR, get_class($this->object)));
        $newName = strtoupper(preg_replace('/([a-z])([A-Z])/', '$1_$2', $class));
        $message = constant("DSchoenbauer\Exception\Enum\ExceptionDefaultMessages::" . $newName);
        $this->assertEquals($message, $this->object->getDefaultMessage());
        $this->assertEquals($message, $this->object->getMessage());
    }

    public function getErrorNumber() {
        return $this->errorNumber;
    }

    public function setErrorNumber($errorNumber) {
        $this->errorNumber = $errorNumber;
        return $this;
    }
}
