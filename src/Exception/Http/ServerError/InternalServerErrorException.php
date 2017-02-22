<?php

namespace DSchoenbauer\Exception\Http\ServerError;

use DSchoenbauer\Exception\Http\ServerError\ServerErrorException;

/**
 * The server encountered an unexpected condition which prevented it from fulfilling the request.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class InternalServerErrorException extends ServerErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 500);
    }

}
