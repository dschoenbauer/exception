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
namespace DSchoenbauer\Exception\Http\ServerError;

use DSchoenbauer\Exception\Enum\ExceptionDefaultMessages;

/**
 * The server is currently unable to handle the request due to a temporary
 * overload or scheduled maintenance, which will likely be alleviated after
 * some delay.
 *
 * The server MAY send a Retry-After header field1 to suggest an appropriate
 * amount of time for the client to wait before retrying the request.
 *
 * Note: The existence of the 503 status code does not imply that a server
 * has to use it when becoming overloaded. Some servers might simply refuse the
 * connection.
 *
 * @link https://httpstatuses.com/503 Source
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class ServiceUnavailableException extends ServerErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 503);
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::SERVICE_UNAVAILABLE_EXCEPTION;
    }
}
