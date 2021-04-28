<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class User
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Users\GetAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\GetAuthenticatedOperation();
    }
    function patch() : \ApiClients\Client\Github\OpenAPI\Operation\Users\UpdateAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\UpdateAuthenticatedOperation();
    }
}
