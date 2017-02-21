<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use DomainException as Domain;

/**
 * Exception thrown if a value does not adhere to a defined valid data domain.
 *
 * @author David Schoenbauer <d.schoenbauer@ctimeetingtech.com>
 */
class DomainException extends Domain implements ExceptionInterface {
    
}
