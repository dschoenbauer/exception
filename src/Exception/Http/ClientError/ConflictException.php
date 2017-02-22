<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The request could not be completed due to a conflict with the current state 
 * of the target resource. This code is used in situations where the user might 
 * be able to resolve the conflict and resubmit the request.
 * 
 * The server SHOULD generate a payload that includes enough information for a 
 * user to recognize the source of the conflict.
 * 
 * Conflicts are most likely to occur in response to a PUT request. For example, 
 * if versioning were being used and the representation being PUT included 
 * changes to a resource that conflict with those made by an earlier 
 * (third-party) request, the origin server might use a 409 response to indicate 
 * that it can't complete the request. In this case, the response representation 
 * would likely contain information useful for merging the differences based on 
 * the revision history.
 * 
 *  @link https://httpstatuses.com/409 Source
 *  @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class ConflictException extends ClientErrorException {

    public function __construct($reasonForError = "") {
        parent::__construct($reasonForError, 409);
    }

}
