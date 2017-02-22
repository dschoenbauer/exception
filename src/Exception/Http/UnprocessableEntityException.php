<?php

namespace DSchoenbauer\Exception\Http;

use DSchoenbauer\Exception\Platform\InvalidArgumentException;

/**
 * The request was well-formed but was unable to be followed due to semantic errors.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnprocessableEntityException extends InvalidArgumentException implements HttpExceptionInterface {

    public function __construct($message = "") {
        parent::__construct($message, 422);
    }

}
