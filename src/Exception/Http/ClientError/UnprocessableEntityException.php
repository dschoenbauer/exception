<?php

namespace DSchoenbauer\Exception\Http\ClientError;

/**
 * The server understands the content type of the request entity (hence a 
 * 415 Unsupported Media Type status code is inappropriate), and the syntax of 
 * the request entity is correct (thus a 400 Bad Request status code is 
 * inappropriate) but was unable to process the contained instructions.
 * 
 * For example, this error condition may occur if an XML request body contains 
 * well-formed (i.e., syntactically correct), but semantically erroneous, 
 * XML instructions.
 *
 * @link https://httpstatuses.com/422 Source
 * @author David Schoenbauer <dschoenbauer@gmail.com>
 */
class UnprocessableEntityException extends ClientErrorException {

    public function __construct($message = "") {
        parent::__construct($message, 422);
    }

}
