<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace DSchoenbauer\Exception\Enum;

use PHPUnit\Framework\TestCase;

/**
 * Description of ExceptionDefaultMessagesTest
 *
 * @author David Schoenbauer
 */
class ExceptionDefaultMessagesTest extends TestCase
{

    private $object;
    private $sentenceWordCount = 3;

    protected function setUp()
    {
        $this->object = new ExceptionDefaultMessages();
    }

    /**
     * @dataProvider constantDataProvider()
     * @param string $name
     * @param string $value
     */
    public function testProperSentenceStructure($name, $value)
    {
        $test = preg_replace('/[A-Z][^\.]+\. ?/', "", $value);
        $this->assertTrue(strlen($test) === 0, $name . " does not have proper sentence structure.");
    }

    /**
     * @dataProvider constantDataProvider()
     * @param string $name
     * @param string $value
     */
    public function testSentenceWordLength($name, $value)
    {
        $sentences = array_filter(explode('.', $value));
        foreach ($sentences as $sentence) {
            $words = array_filter(explode(' ', trim($sentence)));
            $this->assertTrue(count($words) >= $this->sentenceWordCount, $name . " does not have enough detail in the message.");
            
        }
    }

    /**
     * 
     */
    public function constantDataProvider()
    {
        $reflection = new \ReflectionClass(new ExceptionDefaultMessages());
        $constants = $reflection->getConstants();
        $output = [];
        foreach ($constants as $name => $value) {
            $output[] = compact('name', 'value');
        }
        return $output;
    }
}
