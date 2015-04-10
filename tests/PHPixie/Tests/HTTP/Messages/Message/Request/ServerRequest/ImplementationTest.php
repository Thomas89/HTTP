<?php

namespace PHPixie\Tests\HTTP\Messages\Message\Request\ServerRequest;

/**
 * @coversDefaultClass PHPixie\HTTP\Messages\Message\Request\ServerRequest\Implementation
 */
class ServerRequestTest extends \PHPixie\Tests\HTTP\Messages\Message\Request\ServerRequestTest
{
    public function message()
    {
        return new \PHPixie\HTTP\Messages\Message\Request\ServerRequest\Implementation(
            $this->protocolVersion,
            $this->headers,
            $this->body,
            $this->method,
            $this->uri,
            $this->serverParams,
            $this->queryParams,
            $this->parsedBody,
            $this->cookieParams,
            $this->fileParams,
            $this->attributes
        );
    }    
}