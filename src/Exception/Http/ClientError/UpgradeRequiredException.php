<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The server refuses to perform the request using the current protocol but 
 * might be willing to do so after the client upgrades to a different protocol.
 * 
 * The server MUST send an Upgrade header field in a 426 response to indicate 
 * the required protocol(s)
 *
 * @link https://httpstatuses.com/426 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @todo Add a way to define the upgrade header
 */
class UpgradeRequiredException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 426);
    }

}
