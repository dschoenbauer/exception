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
namespace DSchoenbauer\Exception\Http\ClientError;

use DSchoenbauer\Exception\Enum\ExceptionDefaultMessages;

/**
 * The server refuses to perform the request using the current protocol but
 * might be willing to do so after the client upgrades to a different protocol.
 *
 * The server MUST send an Upgrade header field in a 426 response to indicate
 * the required protocol(s)
 *
 * @link https://httpstatuses.com/426 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class UpgradeRequiredException extends ClientErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 426);
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::UPGRADE_REQUIRED_EXCEPTION;
        ;
    }
}
