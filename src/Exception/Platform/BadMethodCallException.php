<?php

namespace DSchoenbauer\Exception\Platform;

use BadMethodCallException as BadMethodCall;
use DSchoenbauer\Exception\ExceptionInterface;

/**
 * Exception thrown if a callback refers to an undefined method or if some arguments are missing.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class BadMethodCallException extends BadMethodCall implements ExceptionInterface {
    
}
