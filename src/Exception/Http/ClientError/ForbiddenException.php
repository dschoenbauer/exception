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
 * The server understood the request but refuses to authorize it.
 *
 * A server that wishes to make public why the request has been forbidden can
 * describe that reason in the response payload (if any).
 *
 * If authentication credentials were provided in the request, the server
 * considers them insufficient to grant access. The client SHOULD NOT
 * automatically repeat the request with the same credentials. The client MAY
 * repeat the request with new or different credentials. However, a request
 * might be forbidden for reasons unrelated to the credentials.
 *
 * An origin server that wishes to "hide" the current existence of a forbidden
 * target resource MAY instead respond with a status code of 404 Not Found.
 *
 * @link https://httpstatuses.com/403 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class ForbiddenException extends ClientErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 403);
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::FORBIDDEN_EXCEPTION;
    }
}
