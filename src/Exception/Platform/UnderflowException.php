<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use UnderflowException as Underflow;

/**
 * Exception thrown when performing an invalid operation on an empty container, 
 * such as removing an element.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnderflowException extends Underflow implements ExceptionInterface {
    
}
