<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use OutOfBoundsException as OutOfBounds;

/**
 * Exception thrown if a value is not a valid key. This represents errors that cannot be detected at compile time.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class OutOfBoundsException extends OutOfBounds implements ExceptionInterface {
    
}
