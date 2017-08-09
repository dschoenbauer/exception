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
 * The origin server is refusing to service the request because the payload is
 * in a format not supported by this method on the target resource.
 *
 * The format problem might be due to the requests indicated Content-Type or
 * Content-Encoding, or as a result of inspecting the data directly.
 *
 * @link https://httpstatuses.com/415 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 */
class UnsupportedMediaTypeException extends ClientErrorException
{

    private $_supportedMediaTypes = [];

    /**
     * @param mixed $supportedMediaTypes a list of supported media types to give
     * the client a clue as to what is expected
     * @param string $message a message from the offending section of code
     */
    public function __construct(array $supportedMediaTypes = [], $message = "")
    {
        parent::__construct($message, 415);
        $this->setSupportedMediaTypes($supportedMediaTypes);
    }

    /**
     * @return mixed a list of supported media types
     */
    public function getSupportedMediaTypes()
    {
        return $this->supportedMediaTypes;
    }

    /**
     * @param array $supportedMediaTypes a list of media types supported
     * @return $this
     */
    public function setSupportedMediaTypes(array $supportedMediaTypes)
    {
        $this->supportedMediaTypes = $supportedMediaTypes;
        return $this;
    }

    public function getDefaultMessage()
    {
        return ExceptionDefaultMessages::UNSUPPORTED_MEDIA_TYPE_EXCEPTION;
    }
}
