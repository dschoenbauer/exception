<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The server cannot or will not process the request due to something that is 
 * perceived to be a client error (e.g., malformed request syntax, invalid 
 * request message framing, or deceptive request routing).
 * @link https://httpstatuses.com/400 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class BadRequestException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 400);
    }

}
