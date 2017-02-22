<?php

namespace DSchoenbauer\Exception\Http\ClientError;


/**
 * Reserved for future use.
 * @link https://httpstatuses.com/402 Source
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class PaymentRequiredException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 402);
    }

}
