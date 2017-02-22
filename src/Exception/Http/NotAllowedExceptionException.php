<?php



namespace DSchoenbauer\Exception\Http;

/**
 * Description of NotAllowedException
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class NotAllowedException extends \DSchoenbauer\Exception\Platform\RuntimeException implements HttpExceptionInterface {

    public function __construct($message = "") {
        parent::__construct($message, 405);
    }
}
