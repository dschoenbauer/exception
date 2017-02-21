<?php

namespace DSchoenbauer\Exception\Http;

use DSchoenbauer\Exception\Platform\RuntimeException;


/**
 * 
 *
 * @author David Schoenbauer <d.schoenbauer@ctimeetingtech.com>
 */
class PaymentRequired extends RuntimeException implements HttpExceptionInterface {

    public function __construct($message = "") {
        parent::__construct($message, 402);
    }

}
