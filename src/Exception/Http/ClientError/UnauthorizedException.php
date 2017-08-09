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
 * The request has not been applied because it lacks valid authentication
 * credentials for the target resource.
 *
 * The server generating a 401 response MUST send a WWW-Authenticate header
 * field1 containing at least one challenge applicable to the target resource.
 *
 * If the request included authentication credentials, then the 401 response
 * indicates that authorization has been refused for those credentials. The user
 * agent MAY repeat the request with a new or replaced Authorization header
 * field2. If the 401 response contains the same challenge as the prior response,
 * and the user agent has already attempted authentication at least once, then
 * the user agent SHOULD present the enclosed representation to the user, since
 * it usually contains relevant diagnostic information.
 *
 * @link https://httpstatuses.com/401 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class UnauthorizedException extends ClientErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 401);
    }
    
    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::UNAUTHORIZED_EXCEPTION;
    }

}
