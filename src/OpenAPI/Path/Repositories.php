<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Repositories
{
    function get($since) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListPublicOperation($since);
    }
}
