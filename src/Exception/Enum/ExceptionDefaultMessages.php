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

namespace DSchoenbauer\Exception\Enum;

/**
 * A group of constants that house their default messages
 * Tips for a good error message:
 * 1. Be specific to the user’s task. Provide guidance.
 * 2. Let users know you’re human.
 * 3. Embrace humor in the situation. Keep it polite, and light hearted.
 * 4. Don’t make users work for it. Provide help and hints to getting the issues resolved.
 * 
 * @author David Schoenbauer
 */
class ExceptionDefaultMessages
{
//Client Error Exceptions
    const CLIENT_ERROR_EXCEPTION = "An error has occured. Please modify content and resubmit your request.";
    const BAD_REQUEST_EXCEPTION = "Your browser sent a request that this server could not understand.";
    const RUNTIME_EXCEPTION = "This application has requested the Runtime to terminate it in an unusual way.";
    const CONFLICT_EXCEPTION = "The request could not be completed due to a conflict with the current state  of the "
        . "target resource.";
    const FORBIDDEN_EXCEPTION = "The server understood the request but refuses to authorize it.";
    const NOT_ALLOWED_EXCEPTION = "The method received in the request-line is known by the origin server but not "
        . "supported by the target resource.";
    const NOT_FOUND_EXCEPTION = "The origin server did not find a current representation for the target resource or is "
        . "not willing to disclose that one exists.";
    const PAYLOAD_TOO_LARGE_EXCEPTION = "The server is refusing to process a request because the request payload is "
        . "larger than the server is willing or able to process.";
    const PAYMENT_REQUIRED_EXCEPTION = "To continue a payment is required.";
    const UNAUTHORIZED_EXCEPTION = "The request has not been applied because it lacks valid authentication credentials "
        . "for the target resource.";
    const UNAVAILABLE_FOR_LEGAL_REASONS_EXCEPTION = "The server is denying access to the resource as a consequence of "
        . "a legal demand.";
    const UNPROCESSABLE_ENTITY_EXCEPTION = "The server understands the content type of the request entity, and the "
        . "syntax of the request entity is correct but was unable to process the contained instructions.";
    const UNSUPPORTED_MEDIA_TYPE_EXCEPTION = "The origin server is refusing to service the request because the payload "
        . "is in a format not supported by this method on the target resource.";
    const UPGRADE_REQUIRED_EXCEPTION = "The server refuses to perform the request using the current protocol but "
        . "might be willing to do so after the client upgrades to a different protocol.";
//Server Errors
    const INTERNAL_SERVER_ERROR_EXCEPTION = "The server encountered an unexpected condition which prevented it from "
        . "fulfilling the request.";
    const SERVER_ERROR_EXCEPTION = "An error has occurred on the server. Please be patient why techs repair the issue.";
    const SERVICE_UNAVAILABLE_EXCEPTION = "The server is currently unable to handle the request due to a temporary "
        . "overload or scheduled maintenance, which will likely be alleviated after some delay.";
//Plateform Errors:
    const BAD_FUNCTION_CALL_EXCEPTION = "A callback refers to an undefined function or if some arguments are missing.";
    const BAD_METHOD_CALL_EXCEPTION = "A callback refers to an undefined method or if some arguments are missing.";
    const DOMAIN_EXCEPTION = "A value provided does not part of the required domain.";
    const EXCEPTION = "An error has occured.";
    const INVALID_ARGUMENT_EXCEPTION = "An argument is not of the expected type.";
    const LENGTH_EXCEPTION = "The length is invalid.";
    const LOGIC_EXCEPTION = "There is an error in the program logic.";
    const OUT_OF_BOUNDS_EXCEPTION = "A value is not a valid key.";
    const OUT_OF_RANGE_EXCEPTION = "An illegal index was requested.";
    const OVERFLOW_EXCEPTION = "Container is full.";
    const RANGE_EXCEPTION = "A range error has occured.";
    const UNDERFLOW_EXCEPTION = "An invalid operation hos been attempted on an empty container.";
    const UNEXPECTED_VALUE_EXCEPTION = "A value does not match with a set of values.";

}
