<?php

namespace DSchoenbauer\Exception\Http\ClientError;

use DSchoenbauer\Exception\Platform\RuntimeException;


/**
 * 
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class PaymentRequiredException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 402);
    }

}
