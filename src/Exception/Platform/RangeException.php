<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use RangeException as Range;

/**
 * Exception thrown to indicate range errors during program execution. 
 * Normally this means there was an arithmetic error other than under/overflow. 
 * This is the runtime version of DomainException.
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class RangeException extends Range implements ExceptionInterface {
    
}
