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
 * The server understands the content type of the request entity (hence a
 * 415 Unsupported Media Type status code is inappropriate), and the syntax of
 * the request entity is correct (thus a 400 Bad Request status code is
 * inappropriate) but was unable to process the contained instructions.
 *
 * For example, this error condition may occur if an XML request body contains
 * well-formed (i.e., syntactically correct), but semantically erroneous,
 * XML instructions.
 *
 * @link https://httpstatuses.com/422 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class UnprocessableEntityException extends ClientErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 422);
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::UNPROCESSABLE_ENTITY_EXCEPTION;
    }
}
