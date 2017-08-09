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
 * The request could not be completed due to a conflict with the current state 
 * of the target resource. This code is used in situations where the user might 
 * be able to resolve the conflict and resubmit the request.
 * 
 * The server SHOULD generate a payload that includes enough information for a 
 * user to recognize the source of the conflict.
 * 
 * Conflicts are most likely to occur in response to a PUT request. For example, 
 * if versioning were being used and the representation being PUT included 
 * changes to a resource that conflict with those made by an earlier 
 * (third-party) request, the origin server might use a 409 response to indicate 
 * that it can't complete the request. In this case, the response representation 
 * would likely contain information useful for merging the differences based on 
 * the revision history.
 * 
 *  @link https://httpstatuses.com/409 Source
 *  @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class ConflictException extends ClientErrorException {

    public function __construct($reasonForError = "") {
        parent::__construct($reasonForError, 409);
    }
    
    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::CONFLICT_EXCEPTION;
    }

}
