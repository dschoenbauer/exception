<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use LengthException as Length;

/**
 * Exception thrown if a length is invalid.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class LengthException extends Length implements ExceptionInterface {
    
}
