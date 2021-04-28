<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Gists
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\ListOperation($since, $per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Gists\CreateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\CreateOperation();
    }
}
