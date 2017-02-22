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
 * The server is refusing to process a request because the request payload is 
 * larger than the server is willing or able to process.
 * 
 * The server MAY close the connection to prevent the client from continuing 
 * the request.
 * 
 * If the condition is temporary, the server SHOULD generate a Retry-After 
 * header field to indicate that it is temporary and after what time the client 
 * MAY try again.
 *
 * @link https://httpstatuses.com/413 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @since 1.0.0
 * @todo provide a method to define a ret-after time
 * @todo provide method to define max size
 */
class PayloadTooLargeException extends ClientErrorException {

    private $maxPayloadSize = 0;


    public function __construct($maxPayloadSize = 0, $message = "") {
        parent::__construct($message, 413);
        $this->setMaxPayloadSize($maxPayloadSize);
    }

    /**
     * @return mixed representation of max payload size
     */
    public function getMaxPayloadSize() {
        return $this->maxPayloadSize;
    }

    /**
     * @param type $maxPayloadSize representation of max payload size
     * @return $this
     */
    public function setMaxPayloadSize($maxPayloadSize) {
        $this->maxPayloadSize = $maxPayloadSize;
        return $this;
    }
}
