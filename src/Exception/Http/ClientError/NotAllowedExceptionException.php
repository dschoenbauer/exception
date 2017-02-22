<?php



namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * Description of NotAllowedException
 *
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class NotAllowedException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 405);
    }
}
