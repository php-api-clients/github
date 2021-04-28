<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gists;

final class Public
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\ListPublicOperation($since, $per_page, $page);
    }
}
