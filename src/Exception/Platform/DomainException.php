<?php

namespace DSchoenbauer\Exception\Platform;

use DSchoenbauer\Exception\ExceptionInterface;
use DomainException as Domain;

/**
 * Domain means data domain here. That is a DomainException shall be through whenever a value does not adhere to a defined valid data domain. Examples:
 * - 0 is not a in the domain for division.
 * - Foo is not in the domain for weekdays.
 * - Apple is not in the domain for months
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class DomainException extends Domain implements ExceptionInterface {
    
}
