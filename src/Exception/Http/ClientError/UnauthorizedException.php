<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The request has not been applied because it lacks valid authentication 
 * credentials for the target resource.
 * 
 * The server generating a 401 response MUST send a WWW-Authenticate header 
 * field1 containing at least one challenge applicable to the target resource.
 * 
 * If the request included authentication credentials, then the 401 response 
 * indicates that authorization has been refused for those credentials. The user 
 * agent MAY repeat the request with a new or replaced Authorization header 
 * field2. If the 401 response contains the same challenge as the prior response, 
 * and the user agent has already attempted authentication at least once, then 
 * the user agent SHOULD present the enclosed representation to the user, since 
 * it usually contains relevant diagnostic information.
 * 
 * @link https://httpstatuses.com/401 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnauthorizedException extends ClientErrorException{

    public function __construct($message = "") {
        parent::__construct($message, 401);
    }

}
