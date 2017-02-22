<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use InvalidArgumentException as InvalidArgument;

/**
 * Exception thrown if an argument is not of the expected type.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class InvalidArgumentException extends InvalidArgument implements ExceptionInterface {
    
}
