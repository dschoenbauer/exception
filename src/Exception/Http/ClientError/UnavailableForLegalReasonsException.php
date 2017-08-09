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
 * Intended to be used when resource access is denied for legal reasons, e.g.
 * censorship or government-mandated blocked access. A reference to the 1953
 * dystopian novel Fahrenheit 451, where books are outlawed, and the
 * autoignition temperature of paper, 451°F.
 *
 * The server is denying access to the resource as a consequence of a legal demand.
 *
 * The server in question might not be an origin server. This type of legal
 * demand typically most directly affects the operations of ISPs and
 * search engines.
 *
 * Responses using this status code SHOULD include an explanation, in the
 * response body, of the details of the legal demand: the party making it,
 * the applicable legislation or regulation, and what classes of person and
 * resource it applies to.
 *
 * @link https://httpstatuses.com/451 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class UnavailableForLegalReasonsException extends ClientErrorException
{

    public function __construct($message = "")
    {
        parent::__construct($message, 451);
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::UNAVAILABLE_FOR_LEGAL_REASONS_EXCEPTION;
    }
}
