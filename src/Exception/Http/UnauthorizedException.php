<?php

namespace DSchoenbauer\Exception\Http;

use DSchoenbauer\Exception\Platform\RuntimeException;

/**
 * Error code response for missing or invalid authentication token.
 *
 * @author David
 */
class UnauthorizedException extends RuntimeException implements HttpExceptionInterface {

    public function __construct($message = "") {
        parent::__construct($message, 401);
    }

}
