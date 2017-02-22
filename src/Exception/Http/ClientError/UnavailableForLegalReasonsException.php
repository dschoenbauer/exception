<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * Intended to be used when resource access is denied for legal reasons, e.g. 
 * censorship or government-mandated blocked access. A reference to the 1953 
 * dystopian novel Fahrenheit 451, where books are outlawed, and the 
 * autoignition temperature of paper, 451°F.
 * 
 * The server is denying access to the resource as a consequence of a legal demand.
 * 
 * The server in question might not be an origin server. This type of legal 
 * demand typically most directly affects the operations of ISPs and 
 * search engines.
 * 
 * Responses using this status code SHOULD include an explanation, in the 
 * response body, of the details of the legal demand: the party making it, 
 * the applicable legislation or regulation, and what classes of person and 
 * resource it applies to.
 *
 * @link https://httpstatuses.com/451 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnavailableForLegalReasonsException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 451);
    }

}
