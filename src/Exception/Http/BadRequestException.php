<?php

namespace DSchoenbauer\Exception\Http;

use DSchoenbauer\Exception\Platform\InvalidArgumentException;

/**
 * The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class BadRequestException extends InvalidArgumentException implements HttpExceptionInterface {

    public function __construct($message = "") {
        parent::__construct($message, 400);
    }

}
