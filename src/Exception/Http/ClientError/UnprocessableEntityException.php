<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The request was well-formed but was unable to be followed due to semantic errors.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnprocessableEntityException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 422);
    }

}
