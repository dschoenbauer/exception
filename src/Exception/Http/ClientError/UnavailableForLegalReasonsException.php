<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * Intended to be used when resource access is denied for legal reasons, e.g. censorship or government-mandated blocked access. A reference to the 1953 dystopian novel Fahrenheit 451, where books are outlawed, and the autoignition temperature of paper, 451°F.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnavailableForLegalReasonsException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 451);
    }

}