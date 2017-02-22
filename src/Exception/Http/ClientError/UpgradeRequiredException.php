<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * Reliable, interoperable negotiation of Upgrade features requires an unambiguous failure signal. The 426 Upgrade Required status code allows a server to definitively state the precise protocol extensions a given resource must be served with.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UpgradeRequiredException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 426);
    }

}
