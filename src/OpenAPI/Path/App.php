<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class App
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetAuthenticatedOperation();
    }
}
