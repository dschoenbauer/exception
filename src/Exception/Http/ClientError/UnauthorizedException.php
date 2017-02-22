<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * Error code response for missing or invalid authentication token.
 *
 * @author David
 */
class UnauthorizedException extends \DSchoenbauer\Exception\Http\ClientError\ClientErrorException{

    public function __construct($message = "") {
        parent::__construct($message, 401);
    }

}
