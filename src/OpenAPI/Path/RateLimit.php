<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\RateLimit\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\RateLimit\GetOperation();
    }
}
