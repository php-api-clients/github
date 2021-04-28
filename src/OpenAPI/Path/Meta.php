<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Meta
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Meta\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Meta\GetOperation();
    }
}
