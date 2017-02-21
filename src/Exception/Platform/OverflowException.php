<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use OverflowException as Overflow;

/**
 * Exception thrown when adding an element to a full container.
 *
 * @author David Schoenbauer <d.schoenbauer@ctimeetingtech.com>
 */
class OverflowException extends Overflow implements ExceptionInterface {
    
}
