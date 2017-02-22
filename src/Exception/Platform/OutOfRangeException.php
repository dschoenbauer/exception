<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use OutOfRangeException as OutOfRange;

/**
 * Exception thrown when an illegal index was requested. This represents errors that should be detected at compile time.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class OutOfRangeException extends OutOfRange implements ExceptionInterface {
    
}
