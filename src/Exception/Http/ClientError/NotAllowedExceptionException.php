<?php



namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The method received in the request-line is known by the origin server but not 
 * supported by the target resource.
 * 
 * The origin server MUST generate an Allow header field in a 405 response 
 * containing a list of the target resource's currently supported methods.
 * 
 * A 405 response is cacheable by default; i.e., unless otherwise indicated by 
 * the method definition or explicit cache controls1.
 *
 * @link https://httpstatuses.com/405 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 * @todo define a away to provide the allowed methods
 */
class NotAllowedException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 405);
    }
}
