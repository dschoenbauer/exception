<?php

namespace DSchoenbauer\Exception\Http;

use DSchoenbauer\Exception\Platform\RuntimeException;


/**
 * 
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class PaymentRequiredException extends RuntimeException implements HttpExceptionInterface {

    public function __construct($message = "") {
        parent::__construct($message, 402);
    }

}
