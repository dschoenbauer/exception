<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The server has not found anything matching the Request-URI. No indication is given of whether the condition is temporary or permanent. The 410 (Gone) status code SHOULD be used if the server knows, through some internally configurable mechanism, that an old resource is permanently unavailable and has no forwarding address. This status code is commonly used when the server does not wish to reveal exactly why the request has been refused, or when no other response is applicable.
 * 
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class NotFoundException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 404);
    }

}