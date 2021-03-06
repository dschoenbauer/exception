<?php
/*
 * The MIT License
 *
 * Copyright 2017 David Schoenbauer <dschoenbauer@gmail.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace DSchoenbauer\Exception\Platform;

use DomainException as Domain;
use DSchoenbauer\Exception\Enum\ExceptionDefaultMessages;
use DSchoenbauer\Exception\ExceptionInterface;

/**
 * Domain means data domain here. That is a DomainException shall be through
 * whenever a value does not adhere to a defined valid data domain. Examples:
 * - 0 is not a in the domain for division.
 * - Foo is not in the domain for weekdays.
 * - Apple is not in the domain for months
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class DomainException extends Domain implements ExceptionInterface
{

    public function __construct($message = "", $code = 0, $previous = null)
    {
        if ($message === "") {
            $message = $this->getDefaultMessage();
        }
        parent::__construct($message, $code, $previous);
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::DOMAIN_EXCEPTION;
    }
}
