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

/**
 * The origin server did not find a current representation for the target
 * resource or is not willing to disclose that one exists.
 *
 * A 404 status code does not indicate whether this lack of representation is
 * temporary or permanent; the 410 Gone status code is preferred over 404 if the
 * origin server knows, presumably through some configurable means, that the
 * condition is likely to be permanent.
 *
 * A 404 response is cacheable by default; i.e., unless otherwise indicated by
 * the method definition or explicit cache controls
 * @link https://httpstatuses.com/404 Source
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class NotFoundException extends ClientErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 404);
    }
    
    public function getDefaultMessage()
    {
        return \DSchoenbauer\Exception\Enum\ExceptionDefaultMessages::NOT_FOUND_EXCEPTION;
    }

}
