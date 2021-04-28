<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gists;

final class Starred
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\ListStarredOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\ListStarredOperation($since, $per_page, $page);
    }
}
